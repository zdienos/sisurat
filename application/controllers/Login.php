<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
  }

	public function index()
	{
    $data['title'] = "SI Surat";
    $this->form_validation->set_rules('username','Username','trim|required');
    $this->form_validation->set_rules('password','Password','trim|required|callback_db_cek');
    if ($this->form_validation->run() == false) {
      $this->load->view('v_login', $data);
    } else {
     redirect(base_url('home'), 'refresh');
    }
	}

  function db_cek($password)
  {
    $username = $this->input->post('username');
    $user = $this->model->login($username, $password);
    
    if ($user) {
      foreach ($user as $u) {
        $sess_array = array(
          'id' => $u->id,
          'jabatan' => $u->jabatan,
          'username' => $u->username);
        $this->session->set_userdata('log_in', $sess_array);
      }
      return true;
    } else {
      $this->form_validation->set_message('db_cek', '<center>Invalid Username or Password<br /> (Nama Pengguna atau Kata Sandi salah)</center>');
      return false;
    }
  }

   public function logout()
  {
    $this->session->unset_userdata('log_in');
    $this->session->sess_destroy();
    redirect(site_url('login'), 'refresh');
  }

   public function user()
  {
    $user = $this->model->getuser();
        $data['username'] = $user['username'];
        $data['jabatan'] = $user['jabatan'];
        $data['id'] = $user['id'];
    $this->template->load('template','v_user',$data);
  }

  public function masukandatauser()
  {
    $nama = $this->input->post('nama');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $password = $this->input->post('password');
    $jabatan1 = $this->input->post('jabatan1');
    $jabatan2 = $this->input->post('jabatan2');

    $jabatan = $jabatan1.' '.$jabatan2;
    
    $data = array(
      'username' => $nama,
      'nama_lengkap' => $nama_lengkap,
      'password' => $password,
      'Jabatan' => $jabatan
    );

    $result = $this->m_user->saveDatauser($data);

    if ($result) {
      redirect(base_url('Login/data_table'));
    } else {
      redirect(base_url('Login/user'));
    }
  
  }

  public function data_table()
  {
    $user = $this->model->getuser();
        $data['username'] = $user['username'];
        $data['jabatan'] = $user['jabatan'];
        $data['id'] = $user['id'];
        $data['nama_lengkap'] = $user['nama_lengkap'];

    $page = $this->input->get('per_page');  
      $batas = 4;
      if (!$page) {
        $offset = 0;
      } else {
        $offset = $page;
      }

      $config['page_query_string'] = TRUE;
      $config['base_url'] = base_url().'Login/data_table/?';
      $config['total_rows'] = $this->m_user->jumlah_data();
      $config['per_page'] = $batas;

      $config['uri_segment'] = $page;

      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';

      $config['first_link'] = '&laquo; First';
      $config['first_tag_open'] = '<li class="prev page">';
      $config['first_tag_close'] = '</li>';

      $config['last_link'] = 'Last &raquo;';
      $config['last_tag_open'] = '<li class="next page">';
      $config['last_tag_close'] = '</li>';

      $config['next_link'] = 'Next <span class="fa fa-angle-right"></span>';
      $config['next_tag_open'] = '<li class="next page">';
      $config['next_tag_close'] = '</li>';

      $config['prev_link'] = '<span class="fa fa-angle-left"></span> Prev';
      $config['prev_tag_open'] = '<li class="prev page">';
      $config['prev_tag_close'] = '</li>';

      $config['cur_tag_open'] = '<li class="active"><a href="">';
      $config['cur_tag_close'] = '</a></li>';

      $config['num_tag_open'] = '<li class="page">';
      $config['num_tag_close'] = '</li>';

      $this->pagination->initialize($config);
      $data['paging']=$this->pagination->create_links();
      $data['jlhpage']=$page;
      $data['user'] = $this->m_user->data($batas, $offset);
    $this->template->load('template','v_data_user',$data);
  }

  public function hapusDatauser($nama)
  {
    $where = array(
      'id'=> $nama
    );

    $result = $this->m_user->deleteDatauser($where);
    
    if ($result) {
       $this->session->set_flashdata('success','Data berhasil dihapus!');
      redirect(base_url('Login/data_table'));
    } else {
      redirect(base_url('Login/user'));
    }
  }

public function Edit($id)
{
  $user = $this->model->getuser();
        $data['username'] = $user['username'];
        $data['jabatan'] = $user['jabatan'];
        $data['id'] = $user['id'];
        $data['nama_lengkap'] = $user['nama_lengkap'];
  $where = array(
      'id'=> $id
    );

  $data['user'] = $this->m_user->getDatauser($where);
  $this->template->load('template','v_update_user',$data);

}

public function updateDatauser()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('username');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $password = $this->input->post('password');
    $jabatan1 = $this->input->post('jabatan1');
    $jabatan2 = $this->input->post('jabatan2');

    $jabatan = $jabatan1.' '.$jabatan2;
    
    $data = array(
      'username' => $nama,
      'nama_lengkap' => $nama_lengkap,
      'password' => $password,
      'Jabatan' => $jabatan
    );

    $where = array(
      'id'=> $id
    );

    $result = $this->m_user->updateDatauser($data,$where);
    
    if ($result) {
      $this->session->set_flashdata('success','Data berhasil diubah!');
      $this->session->set_flashdata('message','Jika mengubah password, silahkan login kembali.');
      redirect(base_url('Login/data_table'));
    } else {
      redirect(base_url('Login/user'));
    }
  }

}
