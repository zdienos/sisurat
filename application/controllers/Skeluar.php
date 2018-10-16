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
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$prihal = $this->input->post('prihal');
			
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

				
		if ($jenissurat == 'Pencairan') {
			$namasiswa = $this->input->post('nama_siswa');
			$kelas = $this->input->post('kelas');
			$jumlahbayar = $this->input->post('jumlahbayar_pt');
			$pengembaliannorek = $this->input->post('norek');
			$tglmarketing = $this->input->post('tglmarketing');
			$tembusan = $this->input->post('tbspencairan');
			
			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'tgl_marketing' => $tglmarketing,
				'nama_siswa' => $namasiswa,
				'kelas' => $kelas,
				'jumlahbayar' => $jumlahbayar,
				'tembusan' => $tembusan,
				'pengembaliannorek' => $pengembaliannorek
				
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

		
		} elseif ($jenissurat == 'Peringatan') {
			$namasp = $this->input->post('namasp');
			$nip = $this->input->post('nip');
			$jabatan = $this->input->post('jabatan');
			$spke = $this->input->post('spke');
			$kesalahan = $this->input->post('kesalahan');
			$tembusan = $this->input->post('tembusan');
			$tgltembusan = $this->input->post('tgltembusan');
			$jamtembusan = $this->input->post('jamtembusan');

			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'namasp' => $namasp,
				'nip' => $nip,
				'jabatansp' => $jabatan,
				'spke' => $spke,
				'kesalahan' => $kesalahan,
				'tembusan' => $tembusan,
				'tgl_tembusan' => $tgltembusan,
				'jam_tembusan' => $jamtembusan
			);

			$result = $this->m_keluar->saveDatasuratkeluar($data);
			$result2 = $this->m_keluar->saveDatasperingatan($data2);

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
	
		} elseif ($jenissurat == 'Teguran') {
			
			$pemeriksa = $this->input->post('pemeriksa');
			$bgntegur = $this->input->post('bgntegur');
			$teguran = $this->input->post('teguran');
			$penutup = $this->input->post('penutup');
			$tbsteguran = $this->input->post('tbsteguran');

			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'pemeriksa' => $pemeriksa,
				'bgn_tegur' => $bgntegur,
				'teguran' => $teguran,
				'penutup' => $penutup,
				'tembusan' => $tbsteguran
				
				
			);

			$result = $this->m_keluar->saveDatasuratkeluar($data);
			$result2 = $this->m_keluar->saveDatasteguran($data2);

			if ($result && $result2) {
				//redirect(base_url('Skeluar/data_table'));
				$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenissurat);

				$this->load->library('pdf');

			    $this->pdf->setPaper('Letter', 'potrait');
			    $this->pdf->filename = "laporan-".$jenissurat.".pdf";
			    $this->pdf->load_view('v_cetak_Surat_teguran', $data);

			} else {
				redirect(base_url('Skeluar/index'));
			}
	
		}	
	}

	public function hapusDatasuratkeluar($no,$jenissurat)
	{
		$where = array(
			'no'=> $no
		);

		if($jenissurat == 'Pencairan'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);
			if ($data) {
				redirect(base_url('skeluar/data_table'));
			} else {
				redirect(base_url('skeluar/index'));
		}	
		} elseif($jenissurat == 'Peringatan'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);
			if ($data) {
				redirect(base_url('skeluar/data_table'));
			} else {
				redirect(base_url('skeluar/index'));
		}			
		} elseif($jenissurat == 'Teguran'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);
			if ($data) {
				redirect(base_url('skeluar/data_table'));
			} else {
				redirect(base_url('skeluar/index'));
		}	
		} 
		
	}

	public function lihatsuratkeluar($no,$jenis_surat)
	{
		if($jenis_surat == 'Pencairan'){
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar',$data);
		}elseif ($jenis_surat == 'Peringatan') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_speringatan',$data);
		}elseif ($jenis_surat == 'Teguran') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_steguran',$data);
		}
	}

	public function cetaksuratkeluar($no,$jenis_surat)
	{
		if($jenis_surat == 'Pencairan'){
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_pengembalian', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		   	
		}elseif ($jenis_surat == 'Peringatan') {
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_Peringatan', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0));

		}elseif ($jenis_surat == 'Teguran') {
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_teguran', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0));
		}
	}
	
	public function ubahDataskeluar($no,$jenis_surat)
	{
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		if(($jenis_surat == 'Pencairan')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_pencairan',$data);
		} else if(($jenis_surat == 'Peringatan')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_peringatan',$data);
		} else if(($jenis_surat == 'Teguran')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_teguran',$data);
		}
	}
	
	public function gantiDataskeluar()
	{
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		$namasiswa = $this->input->post('nama_siswa');
		$kelas = $this->input->post('kelas');
		$jumlahbayar = $this->input->post('jumlahbayar_pt');
		$pengembaliannorek = $this->input->post('norek');
		$tembusan = $this->input->post('tembusan');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$tglmarketing = $this->input->post('tglmarketing');

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
			'tgl_marketing' => $tglmarketing,
			'nama_siswa' => $namasiswa,
			'kelas' => $kelas,
			'jumlahbayar' => $jumlahbayar,
			'pengembaliannorek' => $pengembaliannorek,
			'tembusan' => $tembusan
		);

		$where = [
			'no' => $no
		];

		$result2 = $this->m_keluar->updateDatasuratkeluar2($data2,$where,$jenissurat);
		$result = $this->m_keluar->updateDatasuratkeluar($data, $where);

		if ($result) {
			redirect(base_url('skeluar/data_table'));
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
	}

	public function gantiDatasperingatan()
	{
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		$tembusan = $this->input->post('tembusan');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$namasp = $this->input->post('namasp');
		$nip = $this->input->post('nip');
		$jabatan = $this->input->post('jabatan');
		$spke = $this->input->post('spke');
		$kesalahan = $this->input->post('kesalahan');
		$tembusan = $this->input->post('tembusan');
		$tgltembusan = $this->input->post('tgltembusan');
		$jamtembusan = $this->input->post('jamtembusan');

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
			'namasp' => $namasp,
			'nip' => $nip,
			'jabatansp' => $jabatan,
			'spke' => $spke,
			'kesalahan' => $kesalahan,
			'tembusan' => $tembusan,
			'tgl_tembusan' => $tgltembusan,
			'jam_tembusan' => $jamtembusan
		);

		$where = [
			'no' => $no
		];

		$result2 = $this->m_keluar->updateDatasuratkeluar2($data2,$where,$jenissurat);
		$result = $this->m_keluar->updateDatasuratkeluar($data, $where);

		if ($result) {
			redirect(base_url('skeluar/data_table'));
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
	}

	public function gantiDatasteguran()
	{
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$pemeriksa = $this->input->post('pemeriksa');
		$bgntegur = $this->input->post('bgntegur');
		$tegur = $this->input->post('teguran');
		$penutup = $this->input->post('penutup');
		$tbsteguran = $this->input->post('tbsteguran');

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
			'pemeriksa' => $pemeriksa,
			'bgn_tegur' => $bgntegur,
			'teguran' => $tegur,
			'penutup' => $penutup,
			'tembusan' => $tbsteguran,
		);

		$where = [
			'no' => $no
		];

		$result2 = $this->m_keluar->updateDatasuratkeluar2($data2,$where,$jenissurat);
		$result = $this->m_keluar->updateDatasuratkeluar($data, $where);

		if ($result) {
			redirect(base_url('skeluar/data_table'));
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
	}
	
}