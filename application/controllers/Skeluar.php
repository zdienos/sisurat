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

		$page = $this->input->get('per_page');	
  		$batas = 5;
  		if (!$page) {
  			$offset = 0;
  		} else {
  			$offset = $page;
  		}

  		$config['page_query_string'] = TRUE;
  		$config['base_url'] = base_url().'Skeluar/data_table/?';
  		$config['total_rows'] = $this->m_keluar->jumlah_data();
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

  		$data['skeluar'] = $this->m_keluar->data($batas, $offset);
      // Akhir Pagination Pemohon
      // Awal load view Pemohon
      $this->template->load('template','v_data_skeluar',$data);
	}

	public function masukanData()
	{
		$data= $this->m_keluar->getNoSurat();
		
		foreach($data as $row  => $val) {
            	$surat = $val->no_surat;
    	}

        $no = $surat + 1;
		$nosurat = $this->input->post('nosurat');
		$namatujuan = $this->input->post('namatujuan');
		$jabatan = $this->input->post('tujuan1');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		if($jenissurat != "Teguran" and $jenissurat != "Peringatan"){
			$prihal = $this->input->post('prihal');
		} elseif ($jenissurat == "Teguran") {
			$prihal = "Surat Teguran";
		} elseif ($jenissurat == "Peringatan") {
			$prihal = "Surat Peringatan";
		}
		
			
		$concat = $jabatan." ".$tujuan;
		$data= array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $concat,
				'jenis_surat' => $jenissurat,
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid

			);

				
		if ($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan PT Kolektif/Bimker') {
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
				$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenissurat);

				$this->load->library('pdf');

			    $this->pdf->setPaper('Letter', 'potrait');
			    $this->pdf->filename = "laporan-".$jenissurat.".pdf";
			    $this->pdf->load_view('v_cetak_Surat_pengembalian', $data);

			} else {
				redirect(base_url('Skeluar/index'));
			}

		
		} elseif ($jenissurat == 'Peringatan') {
			$loktujuan = $this->input->post('loktujuan');
			$nip = $this->input->post('nip');
			$spke = $this->input->post('spke');
			$kesalahan = $this->input->post('kesalahan');
			$tembusan = $this->input->post('tembusan');

			$cek = $this->m_keluar->cekperingatan($nip,$spke);
			
			if ($cek == NULL){
				$data2 = array(
					'no' => $no,
					'no_surat' => $nosurat,
					'loktujuan' => $loktujuan,
					'nip' => $nip,
					'spke' => $spke,
					'kesalahan' => $kesalahan,
					'tembusan' => $tembusan,
				);

				$result = $this->m_keluar->saveDatasuratkeluar($data);
				$result2 = $this->m_keluar->saveDatasperingatan($data2);

				if ($result && $result2) {
					//redirect(base_url('Skeluar/data_table'));
					$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenissurat);

					$this->load->library('pdf');

				    $this->pdf->setPaper('Letter', 'potrait');
				    $this->pdf->filename = "laporan-".$jenissurat.".pdf";
				    $this->pdf->load_view('v_cetak_Surat_Peringatan', $data);

				} else {
					redirect(base_url('Skeluar/index'));
				}

			} else {
				foreach ($cek as $key => $value) {
					$nip = $value->nip;
					$spke = $value->spke;
				}
				
			  $this->session->set_flashdata('success','NIP '.$nip.' tersebut sudah dapat SP '.$spke.' !');
		      $this->session->set_flashdata('message','Periksa kembali data Pemohon.');
		      redirect(base_url('skeluar/data_table'), 'refresh');
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
				
				$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenissurat);

				$this->load->library('pdf');

			    $this->pdf->setPaper('Letter', 'potrait');
			    $this->pdf->filename = "laporan-".$jenissurat.".pdf";
			    $this->pdf->load_view('v_cetak_Surat_teguran', $data);

			} else {
				redirect(base_url('Skeluar/index'));
			}
	
		} elseif ($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan PT Kolektif/Bimker') {
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

			if ($result2) {
				$user = $this->model->getuser();
				$data['username'] = $user['username'];
	  			$data['jabatan'] = $user['jabatan'];
	  			$data['id'] = $user['id'];
	  			$data['nama_lengkap'] = $user['nama_lengkap'];
				$data['cetak'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenissurat);

				$this->load->library('pdf');

			    $this->pdf->setPaper('Letter', 'potrait');
			    $this->pdf->filename = "laporan-".$jenissurat.".pdf";
			    $this->pdf->load_view('v_cetak_Surat_fee', $data);

			} else {
				redirect(base_url('Skeluar/index'));
			}

		}
	}


	public function hapusDatasuratkeluar($no,$jenissurat,$prihal)
	{
		if ($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		$where = array(
			'no'=> $no
		);

		if($jenissurat == 'Pencairan' and $prihal != 1){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);
		} elseif ($jenissurat == 'Pencairan'  and $prihal == 1 ) {	
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where,$prihal);
		} elseif($jenissurat == 'Peringatan'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);		
		} elseif($jenissurat == 'Teguran'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);	
		} 
		
		if ($data >= 1) {
	      $this->session->set_flashdata('success','Data berhasil dihapus!');
	      $this->session->set_flashdata('message','Periksa kembali data Pemohon.');
	      redirect(base_url('skeluar/data_table'), 'refresh');
	    }
		
	}

	public function lihatsuratkeluar($no,$jenis_surat,$prihal)
	{
		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
  			
		if ($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		if($jenis_surat == 'Pencairan' and $prihal != 1){
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar',$data);
		}elseif ($jenis_surat == 'Peringatan') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_speringatan',$data);
		}elseif ($jenis_surat == 'Teguran') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_steguran',$data);
		}elseif ($jenis_surat == 'Pencairan' and $prihal == 1) {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar_fee',$data);
		}
	
	}
	public function cetaksuratkeluar($no,$jenis_surat,$prihal)
	{
		if ($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
  			$data['nama_lengkap'] = $user['nama_lengkap'];

		if(($jenis_surat == 'Pencairan' and $prihal != 1 )){
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_pengembalian', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		   	
		}elseif ($jenis_surat == 'Pencairan' and $prihal == 1) {

			$data['cetak'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);

			$this->load->view('v_cetak_Surat_fee', $data);
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
	
	public function ubahDataskeluar($no,$jenis_surat,$prihal)
	{
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		if ($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

		if(($jenis_surat == 'Pencairan' and $prihal != 1)){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_pencairan',$data);
		} else if(($jenis_surat == 'Pencairan' and $prihal == 1)){
			$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_fee',$data);
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
		$loktujuan = $this->input->post('loktujuan');
		$nip = $this->input->post('nip');
		$spke = $this->input->post('spke');
		$kesalahan = $this->input->post('kesalahan');
		$tembusan = $this->input->post('tembusan');

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
			'loktujuan' => $loktujuan,
			'nip' => $nip,
			'spke' => $spke,
			'kesalahan' => $kesalahan,
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

	public function search()
	{
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		$keyword = $this->input->get('keyword');

		$search = array(
			'no'=> $keyword,
			'no_surat'=> $keyword,
			'perihal' => $keyword,
			'nama_tujuan' =>$keyword,
			'tujuan'=>$keyword,
			'jenis_surat'=>$keyword,
			'userid'=>$keyword,
			'tgl_SuratKeluar'=>$keyword,
		);

		$page = $this->input->get('per_page');
		$batas = 5;
		if (!$page) {
			$offset = 0;
		} else {
			$offset = $page;
		}

		$config['page_query_string'] = TRUE;
		$config['base_url'] = base_url().'Skeluar/search/?'.$keyword;
		$config['total_rows'] = $this->m_keluar->count_skeluar_search($search);
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

		$data['skeluar'] = $this->m_keluar->data($batas, $offset, $search);

		 $this->template->load('template','v_data_skeluar',$data);
	}
	
}