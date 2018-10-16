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
  	//$this->form_validation->set_rules('jabatan','Jabatan','trim|required');
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
    $this->template->load('template','v_user');
  }

  public function masukandatauser()
  {
    $nama = $this->input->post('nama');
    $password = $this->input->post('password');
    $jabatan = $this->input->post('jabatan');
    
    $data = array(
      'username' => $nama,
      'password' => md5($password),
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
    $data['user'] = $this->m_user->viewDatauser();
    $this->template->load('template','v_data_user',$data);
  }

  public function hapusDatauser($nama)
  {
    $where = array(
      'username'=> $nama
    );

    $result = $this->m_user->deleteDatauser($where);
    
    if ($result) {
      redirect(base_url('Login/data_table'));
    } else {
      redirect(base_url('Login/user'));
    }
  }


}
