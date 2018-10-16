<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skeluar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_keluar');
	}


	public function index()
	{
		if ($this->session->userdata('log_in')) {
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];

			$data['get_no'] = $this->m_keluar->getNoSurat();
			$this->template->load('template','v_surat_keluar',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
		
	}

	public function data_table()
	{
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		$data['skeluar'] = $this->m_keluar->viewDatasuratkeluar();
		$this->template->load('template','v_data_skeluar',$data);
	}

	public function masukanData()
	{
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat');
		$namasiswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$jumlahbayar = $this->input->post('jumlahbayar_pt');
		$pengembaliannorek = $this->input->post('norek');
		$tembusan = $this->input->post('tembusan');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');

		$data= array(
			'no' => $no,
			'no_surat' => $nosurat,
			'perihal' => $prihal,
			'nama_tujuan' => $namatujuan,
			'tujuan' => $tujuan,
			'jenis_surat' => $jenissurat,
			'tgl_SuratKeluar' => $tanggal,
			'userid' => $userid

		);

		$data2 = array(
			'no' => $no,
			'no_surat' => $nosurat,
			'nama_siswa' => $namasiswa,
			'kelas' => $kelas,
			'jumlahbayar' => $jumlahbayar,
			'pengembaliannorek' => $pengembaliannorek,
			'tembusan' => $tembusan
		);

		$result = $this->m_keluar->saveDatasuratkeluar($data);
		$result2 = $this->m_keluar->saveDatasuratkeluar2($data2);

		if ($result && $result2) {
			//redirect(base_url('Skeluar/data_table'));
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenissurat);

			$this->load->library('pdf');

		    $this->pdf->setPaper('Letter', 'potrait');
		    $this->pdf->filename = "laporan-".$jenissurat.".pdf";
		    $this->pdf->load_view('v_cetak_Surat_pengembalian', $data);

		} else {
			redirect(base_url('Skeluar/index'));
		}
	}

	public function hapusDatasuratkeluar($nosurat)
	{
		$where = array(
			'no'=> $nosurat
		);

		$where2 = array(
			'no_surat'=> $nosurat
		);
		
		$result = $this->m_keluar->deleteDatasuratkeluar($where);
		$result2 = $this->m_keluar->deleteDatasuratkeluar2($where2);
		
		if ($result2) {
			redirect(base_url('skeluar/data_table'));
		} else {
			redirect(base_url('skeluar/index'));
		}
	}

	public function lihatsuratkeluar($no,$jenis_surat)
	{
		if($jenis_surat == 'Pencairan'){
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar',$data);
		}
	}

	public function cetaksuratkeluar($no,$jenis_surat)
	{
		if(($jenis_surat == 'Pencairan')){
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_pengembalian', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		   	
		}
	}
	
	public function ubahDataskeluar($no,$jenis_surat)
	{
		if(($jenis_surat == 'Pencairan')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar',$data);
		}
	}
	
	public function gantiDataskeluar()
	{
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat');
		$namasiswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$jumlahbayar = $this->input->post('jumlahbayar_pt');
		$pengembaliannorek = $this->input->post('norek');
		$tembusan = $this->input->post('tembusan');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'no_surat' => $nosurat,
			'perihal' => $prihal,
			'nama_tujuan' => $namatujuan,
			'tujuan' => $tujuan,
			'jenis_surat' => $jenissurat,
			'tgl_SuratKeluar' => $tanggal,
			'userid' => $userid

		);

		$data2 = array(
			'no_surat' => $nosurat,
			'nama_siswa' => $namasiswa,
			'kelas' => $kelas,
			'jumlahbayar' => $jumlahbayar,
			'pengembaliannorek' => $pengembaliannorek,
			'tembusan' => $tembusan
		);

		$where = [
			'no' => $nosurat
		];

		$result = $this->m_surat->updateDatasuratkeluar($data, $where);

		if ($result) {
			redirect(base_url('smasuk/data_table'));
		} else {
			redirect(base_url('smasuk/ubahDatasmasuk'));
		}
	}
	
}