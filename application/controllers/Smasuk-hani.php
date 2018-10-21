<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smasuk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_surat');
	}

	public function data_table()
	{
		$user = $this->model->getuser();
  	    $data['username'] = $user['username'];
        $data['jabatan'] = $user['jabatan'];
  		$data['id'] = $user['id'];

  		$page = $this->input->get('per_page');	
  		$batas = 1;
  		if (!$page) {
  			$offset = 0;
  		} else {
  			$offset = $page;
  		}

  		$config['page_query_string'] = TRUE;
  		$config['base_url'] = base_url().'Smasuk/data_table/?';
  		$config['total_rows'] = $this->m_surat->jumlah_data();
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

  		$data['link'] = $this->m_surat->data($batas, $offset);
      // Akhir Pagination Pemohon
      // Awal load view Pemohon
      $this->template->load('template','v_data_smasuk',$data);
      // Akhir load view Pemohon
	}

	public function index()
	{
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
		$this->template->load('template','v_surat_masuk',$data);
	}

	public function masukanData()
	{
		$nosurat = $this->input->post('nosurat');
		$hal = $this->input->post('hal');
		$kepada = $this->input->post('kepada');
		$dari = $this->input->post('dari');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
		$tgl_input = $this->input->post('tgl_input');
		$userid = $this->input->post('userid');

		$data = array(
			'no_surat' => $nosurat,
			'hal' => $hal,
			'kepada' => $kepada,
			'dari' => $dari,
			'keterangan' => $keterangan,
			'tanggal' => $tanggal,
			'tgl_input' => $tgl_input,
			'userid' => $userid
		);

		$result = $this->m_surat->saveDatasuratmasuk($data);

		// if ($result) {
		// 	redirect(base_url('Smasuk/data_table'));
		// } else {
		// 	redirect(base_url('Smasuk/index'));
		// }

		if($result == 1)
          {
              echo '<script>alert("Data Tersimpan");</script>';
              redirect('Smasuk/data_table', 'refresh');
          }
          else{
              $this->session->set_flashdata("message","Gagal Tersimpan");
              redirect('Smasuk/index', 'refresh');
          }
  
	}

	public function hapusDatasuratmasuk($id)
	{
		$where = array(
			'id'=> $id
		);

		$result = $this->m_surat->deleteDatasuratmasuk($where);
		
		if ($result) {
			redirect(base_url('smasuk/data_table'));
		} else {
			redirect(base_url('smasuk/index'));
		}
	}

	public function lihatsuratmasuk($id)
	{
		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
		$where = [
			'id' => $id
		];
		$data['lihat'] = $this->m_surat->lihatsuratmasuk($where);
		$this->template->load('template','v_lihat_smasuk',$data);
	}

	public function ubahDatasmasuk($id)
	{
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];

		$where = [
			'id' => $id
		];

		$data['ubahsurat'] = $this->m_surat->getDatasuratmasuk($where);
		
		$this->template->load('template','v_update_smasuk', $data);
	}
	
	public function gantiDatasmasuk()
	{
		$id = $this->input->post('id');
		$nosurat = $this->input->post('nosurat');
		$hal = $this->input->post('hal');
		$kepada = $this->input->post('kepada');
		$dari = $this->input->post('dari');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
		$tgl_input = $this->input->post('tgl_input');
		$userid = $this->input->post('userid');

		$data = array(
			'no_surat' => $nosurat,
			'hal' => $hal,
			'kepada' => $kepada,
			'dari' => $dari,
			'keterangan' => $keterangan,
			'tanggal' => $tanggal,
			'tgl_input' => $tgl_input,
			'userid' => $userid
		);

		$where = [
			'id' => $id
		];

		$result = $this->m_surat->updateDatasuratmasuk($data, $where);

		if ($result) {
			redirect(base_url('smasuk/data_table'));
		} else {
			redirect(base_url('smasuk/ubahDatasmasuk'));
		}
	}
}
