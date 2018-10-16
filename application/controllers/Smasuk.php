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
  			
		$data['smasuk'] = $this->m_surat->viewDatasuratmasuk();
		$this->template->load('template','v_data_smasuk',$data);
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

		if ($result) {
			redirect(base_url('Smasuk/data_table'));
		} else {
			redirect(base_url('Smasuk/index'));
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
