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

		if($jenissurat == 'Pencairan' and $prihal != 'ACC Pencairan PT Kolektif/Bimker'){ 
			//Pencairan
			$namasiswa = $this->input->post('nama_siswa');
			$kelas = $this->input->post('kelas');
			$jumlahbayar = $this->input->post('jumlahbayar_pt');
			$pengembaliannorek = $this->input->post('norek');
			$tembusan = $this->input->post('tembusan');

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
		} elseif ($jenissurat == 'Pencairan' and $prihal == 'ACC Pencairan PT Kolektif/Bimker') {
			//Pencairan fee
			$lampiran = $this->input->post('lampiran');
			$tgl_marketing = $this->input->post('tgl_marketing');
			$tembusan = $this->input->post('tbs_fee');
			$input = $this->input->post();

			$total_post= count($this->input->post('sekolah'));

			foreach ($input['sekolah'] as $key => $val) {
				$add=array(
					'no' => $no,
					'no_surat' => $nosurat,
					'lampiran' => $lampiran,
					'tgl_marketing' => $tgl_marketing,
					'tembusan' => $tembusan,
					'sekolah' => $input['sekolah'][$key],
					'mou' => $input['mou'][$key],
					'program' => $input['program'][$key],
					'acc' => $input['acc'][$key],
					'tdk_acc' => $input['tdk_acc'][$key],
					'fee_siswa' => $input['fee_siswa'][$key],
					'ket' => $input['ket'][$key],
					'jml_siswa' => $input['acc'][$key]+ $input['tdk_acc'][$key],
					'jml_disetujui' => (int)$input['acc'][$key] * (int)$input['fee_siswa'][$key]
					);			
				$result2 = $this->m_keluar->saveDatasuratkeluar3($add);
			}

			$result = $this->m_keluar->saveDatasuratkeluar($data);
		}
		

		if ($result && $result2) {
			// redirect(base_url('Skeluar/data_table'));

			if($prihal == 'ACC Pencairan PT Kolektif/Bimker'){
				$data['cetak'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenissurat,$prihal);
			} else {
				$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenissurat);
			}

			$this->load->library('pdf');

		    $this->pdf->setPaper('Letter', 'potrait');
		    $this->pdf->filename = "laporan-".$jenissurat.".pdf";

		    if($prihal == 'ACC Pencairan PT Kolektif/Bimker'){
		    	$this->pdf->load_view('v_cetak_Surat_fee', $data);
		    }else{
		    	$this->pdf->load_view('v_cetak_Surat_pengembalian', $data);
		    }

		} else {
			redirect(base_url('Skeluar/index'));
		}
	}

	public function hapusDatasuratkeluar($nosurat,$jenissurat,$prihal)
	{
		if ($prihal == 'ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		$where = array(
			'no'=> $nosurat
		);

		if ($jenissurat == 'Pencairan' and $prihal != 1) {
			$where2 = array(
				'no'=> $nosurat
			);
			 
			$result = $this->m_keluar->deleteDatasuratkeluar($where);
			$result2 = $this->m_keluar->deleteDatasuratkeluar2($where2);

		} elseif ($jenissurat == 'Pencairan'  and $prihal == 1 ) {
			$where3 = array(
			'no'=> $nosurat
			);
			
			$result = $this->m_keluar->deleteDatasuratkeluar($where);
			$result2 = $this->m_keluar->deleteDatasuratkeluar_fee($where3);
		}

		if ($result2) {
			redirect(base_url('skeluar/data_table'));
		} else {
			redirect(base_url('skeluar/index'));
		}
	}

	public function lihatsuratkeluar($no,$jenis_surat,$prihal)
	{
		if ($prihal == 'ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		if($jenis_surat == 'Pencairan' and $prihal != 1){
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar',$data);
		} elseif ($jenis_surat == 'Pencairan' and $prihal == 1) {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar_fee',$data);
		}
	}

	public function cetaksuratkeluar($no,$jenis_surat,$prihal)
	{
		if ($prihal == 'ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		if(($jenis_surat == 'Pencairan' and $prihal != 1 )){
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_pengembalian', $data);

		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		   	
		} elseif ($jenis_surat == 'Pencairan' and $prihal == 1) {

			$data['cetak'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);

			$this->load->view('v_cetak_Surat_fee', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		}
	}
	
	public function ubahDataskeluar($no,$jenis_surat,$prihal)
	{
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		if ($prihal == 'ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}


		if(($jenis_surat == 'Pencairan' and $prihal != 1)){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_pencairan',$data);
		} else if(($jenis_surat == 'Pencairan' and $prihal == 1)){
			$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_fee',$data);
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

	public function gantiDataskeluar_fee()
	{
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$lampiran = $this->input->post('lampiran');
		$tgl_marketing = $this->input->post('tgl_marketing');
		$tembusan = $this->input->post('tbs_fee');
		$input = $this->input->post();
		$total_post= count($this->input->post('sekolah'));
		
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

		$where = [
			'no' => $no
		];
		$where2 = [
			'no' => $no
		];
		$this->m_keluar->deleteDatasuratkeluar_fee($where2);
	//Pencairan fee
		foreach ($input['sekolah'] as $key => $val) {
			$add=array(
				'no' => $no,
				'no_surat' => $nosurat,
				'lampiran' => $lampiran,
				'tgl_marketing' => $tgl_marketing,
				'tembusan' => $tembusan,
				'sekolah' => $input['sekolah'][$key],
				'mou' => $input['mou'][$key],
				'program' => $input['program'][$key],
				'acc' => $input['acc'][$key],
				'tdk_acc' => $input['tdk_acc'][$key],
				'fee_siswa' => $input['fee_siswa'][$key],
				'ket' => $input['ket'][$key],
				'jml_siswa' => $input['acc'][$key]+ $input['tdk_acc'][$key],
				'jml_disetujui' => (int)$input['acc'][$key] * (int)$input['fee_siswa'][$key]
				);			
			$result2 = $this->m_keluar->saveDatasuratkeluar3($add);
		}

		$result = $this->m_keluar->updateDatasuratkeluar($data, $where);

		if ($result) {
			redirect(base_url('skeluar/data_table'));
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
	}

	
}