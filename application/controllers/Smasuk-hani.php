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
		$data['smasuk'] = $this->m_surat->viewDatasuratmasuk();
		$this->template->load('template','v_data_smasuk',$data);
	}

	public function index()
	{
		$this->template->load('template','v_surat_masuk');
	}


	public function masukanData()
	{
		$nosurat = $this->input->post('nosurat');
		$hal = $this->input->post('hal');
		$kepada = $this->input->post('kepada');
		$dari = $this->input->post('dari');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'no_surat' => $nosurat,
			'hal' => $hal,
			'kepada' => $kepada,
			'dari' => $dari,
			'keterangan' => $keterangan,
			'tanggal' => $tanggal
		);

		$result = $this->m_surat->saveDatasuratmasuk($data);

		if ($result) {
			redirect(base_url('Smasuk/data_table'));
		} else {
			redirect(base_url('Smasuk/index'));
		}
	}

	public function hapusDatasuratmasuk($nosurat)
	{
		$where = array(
			'no_surat'=> $nosurat
		);

		$result = $this->m_surat->deleteDatasuratmasuk($where);
		
		if ($result) {
			redirect(base_url('smasuk/data_table'));
		} else {
			redirect(base_url('smasuk/index'));
		}
	}
}
