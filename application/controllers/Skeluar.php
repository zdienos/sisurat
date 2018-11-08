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
  			$data['nama_lengkap'] = $user['nama_lengkap'];
			$this->template->load('template','v_surat_keluar',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
		
	}

	public function data_table()
	{
		if ($this->session->userdata('log_in')) {
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
      } else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function data_table_sidak()
	{
		if ($this->session->userdata('log_in')) {
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
  		$config['base_url'] = base_url().'Skeluar/data_table_sidak/?';
  		$config['total_rows'] = $this->m_keluar->jumlah_data_sidak();
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
  		$data['paging_sidak']=$this->pagination->create_links();
  		$data['jlhpage']=$page;
  		
  		$data['sidak'] = $this->m_keluar->data_sidak($batas, $offset);
      $this->template->load('template','v_data_skeluar_sidak',$data);
      } else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}


	public function masukanData()
	{
		if ($this->session->userdata('log_in')) {
		$jenissurat = $this->input->post('cjenissurat');
		$prihal = $this->input->post('prihal');

		if (($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan PT Kolektif') or 
			($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan Fee Bimker') or 
			($jenissurat == 'Pencairan' and $prihal == 'Surat Tidak ACC Pencairan PT Kolektif') or  
			($jenissurat == 'Pencairan' and $prihal == 'Surat Tidak ACC Pencairan Fee Bimker')) {

			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$bpkibu = $this->input->post('bpkibu');
			$namatjn = $this->input->post('namatujuan');
			$namatujuan = $bpkibu." ".$namatjn ;
			$nmjabatan = $this->input->post('tujuan1');
			$kttujuan = $this->input->post('tujuan');
			$tujuan = $nmjabatan." ".$kttujuan;
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			//Pencairan fee
			$lampiran = $this->input->post('lampiran');
			$tgl_marketing = $this->input->post('tgl_marketing');
			$tembusan = $this->input->post('tbs_fee');
			$input = $this->input->post();

			$total_post= count($this->input->post('sekolah'));

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid

			);
			foreach ($input['sekolah'] as $key => $val) {
				$add[] = array(
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
			}
			$result = $this->m_keluar->saveDatasuratkeluar($data,$add,$jenissurat,$prihal);

	} elseif (($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan PT Kolektif') or 
			 ($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan Fee Bimker') or 
			 ($jenissurat == 'Pencairan' and $prihal != 'Surat Tidak ACC Pencairan PT Kolektif') or  
			 ($jenissurat == 'Pencairan' and $prihal != 'Surat Tidak ACC Pencairan Fee Bimker')) {
			
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$bpkibu = $this->input->post('bpkibu');
			$namatjn = $this->input->post('namatujuan');
			$namatujuan = $bpkibu." ".$namatjn ;
			$nmjabatan = $this->input->post('tujuan1');
			$kttujuan = $this->input->post('tujuan');
			$tujuan = $nmjabatan." ".$kttujuan;
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);
			//Post untuk tabel tb_sk_tidak_kuota
			$namasiswa = $this->input->post('nama_siswa');
			$kelas = $this->input->post('kelas');
			$jumlahbayar = $this->input->post('jumlahbayar_pt');
			$pengembaliannorek = $this->input->post('norek');
			$tembusan = $this->input->post('tbspencairan');
			$tglmarketing = $this->input->post('tglmarketing');
			$unit = $this->input->post('unit');
			
			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'nama_siswa' => $namasiswa,
				'kelas' => $kelas,
				'jumlahbayar' => $jumlahbayar,
				'unit' => $unit,
				'pengembaliannorek' => $pengembaliannorek,
				'tgl_marketing' => $tglmarketing,
				'tembusan' => $tembusan
			);
			$result = $this->m_keluar->saveDatasuratkeluar($data,$data2,$jenissurat,$prihal);
		
	} elseif ($jenissurat == 'Peringatan') {
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$bpkibu = $this->input->post('bpkibu');
			$namatjn = $this->input->post('namatujuan');
			$namatujuan = $bpkibu." ".$namatjn ;
			$nmjabatan = $this->input->post('tujuan1');
			$kttujuan = $this->input->post('tujuan');
			$tujuan = $nmjabatan." ".$kttujuan;
			$prihal = "Surat Peringatan";
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);	

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

				$result = $this->m_keluar->saveDatasuratkeluar($data,$data2,$jenissurat,$prihal);

			} else {
				foreach ($cek as $key => $value) {
					$nip = $value->nip;
					$spke = $value->spke;
				}
				
			  $this->session->set_flashdata('success','NIP '.$nip.' tersebut sudah dapat SP '.$spke.' !');
		      $this->session->set_flashdata('message','Periksa kembali data Surat.');
		      redirect(base_url('skeluar/data_table'), 'refresh');
			}
	} elseif ($jenissurat == 'Teguran') {
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$bpkibu = $this->input->post('bpkibu');
			$namatjn = $this->input->post('namatujuan');
			$namatujuan = $bpkibu." ".$namatjn ;
			$nmjabatan = $this->input->post('tujuan1');
			$kttujuan = $this->input->post('tujuan');
			$tujuan = $nmjabatan." ".$kttujuan;
			$prihal = "Surat Teguran";
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);	

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

			$result = $this->m_keluar->saveDatasuratkeluar($data,$data2,$jenissurat,$prihal);

	} elseif ($jenissurat == 'Pembayaran') {
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$namatujuan = "Dra. Erna Veronika";
			$tujuan = "up.Ibu Wina Wibawa";
			$prihal = "Surat Pembayaran Ekspedisi Pengiriman Barang POS GIRO";
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);	
			
			$periode = $this->input->post('periode');
			$totaltagihan = $this->input->post('totaltagihan');
			$norek = $this->input->post('nomerrekening');

			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'periodepengiriman' => $periode,
				'totaltagihan' => $totaltagihan,
				'norek' => $norek
			);

			$result = $this->m_keluar->saveDatasuratkeluar($data,$data2,$jenissurat,$prihal);

	} elseif ($jenissurat == 'Transfer'){
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$namatujuan = "Dra. Erna Veronika";
			$tujuan = "up.Ibu Wina Wibawa";
			$prihal = "Surat Transfer Pencairan ";
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);	
			//post untuk tabel transfer
			$tgl_pencairan = $this->input->post('tgl_pencairan');
			$jenis_pencairan = $this->input->post('jenis_pencairan');

			if ($jenis_pencairan == "mgm"){ 
				$input = $this->input->post();

				$total_post= count($this->input->post('bank_m'));

				foreach ($input['bank_m'] as $key => $val) {
					$add[]=array(
						'no' => $no,
						'no_surat' => $nosurat,
						'tgl_pencairan' => $tgl_pencairan,
						'jenis_pencairan' => $jenis_pencairan,
						'bank' => $input['bank_m'][$key],
						'jml_order_mgm' => $input['jmlor_mgm_m'][$key],
						'jml_siswa_mgm' => $input['jmlsis_mgm_m'][$key],
						'tot_order' => $input['jmlor_mgm_m'][$key],
						'tot_siswa' => $input['jmlsis_mgm_m'][$key]
						);		
				}

			} elseif ($jenis_pencairan == "pengembalian biaya"){ 
				$input = $this->input->post();

				$total_post= count($this->input->post('bank_b'));

				foreach ($input['bank_b'] as $key => $val) {
					$add[]=array(
						'no' => $no,
						'no_surat' => $nosurat,
						'tgl_pencairan' => $tgl_pencairan,
						'jenis_pencairan' => $jenis_pencairan,
						'bank' => $input['bank_b'][$key],
						'jml_order_biaya' => $input['jmlor_biaya_b'][$key],
						'jml_siswa_biaya' => $input['jmlsis_biaya_b'][$key],
						'tot_order' => $input['jmlor_biaya_b'][$key],
						'tot_siswa' => $input['jmlsis_biaya_b'][$key]
						);	
				}

			} elseif ($jenis_pencairan == "mgm dan pengembalian biaya"){ 
				$input = $this->input->post();

				$total_post= count($this->input->post('bank_mb'));

				foreach ($input['bank_mb'] as $key => $val) {
					$add[]=array(
						'no' => $no,
						'no_surat' => $nosurat,
						'tgl_pencairan' => $tgl_pencairan,
						'jenis_pencairan' => $jenis_pencairan,
						'bank' => $input['bank_mb'][$key],
						'jml_order_mgm' => $input['jmlor_mgm_mb'][$key],
						'jml_siswa_mgm' => $input['jmlsis_mgm_mb'][$key],
						'jml_order_biaya' => $input['jmlor_biaya_mb'][$key],
						'jml_siswa_biaya' => $input['jmlsis_biaya_mb'][$key],
						'tot_order' => (int)$input['jmlor_mgm_mb'][$key] + (int)$input['jmlor_biaya_mb'][$key],
						'tot_siswa' => (int)$input['jmlsis_mgm_mb'][$key] + (int)$input['jmlsis_biaya_mb'][$key]
						);	
				}
			}

			$result = $this->m_keluar->saveDatasuratkeluar($data,$add,$jenissurat,$prihal);	
	} elseif ($jenissurat == 'Sidak') {
		//auto number no surat
			$data= $this->m_keluar->getNoSurat_sidak();
		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}

	    	$no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$perihal = $this->input->post('perihal_sidak');
			$nama_penerima = $this->input->post('namapenerima_sidak');
			$jabatan = $this->input->post('tujuan1_sidak');
			$tujuan = $this->input->post('tujuan_sidak');
			$tgl_sidak = $this->input->post('tgl_sidak');
			$petugas_sidak = $this->input->post('petugas_sidak');
			$tugas_sidak = $this->input->post('tugas_sidak');
			$tembusan = $this->input->post('tembusan_sidak');

			$tujuan_sidak = $jabatan." ".$tujuan;

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $perihal,
				'nama_penerima' => $nama_penerima,
				'tujuan_penerima' => $tujuan_sidak,
				'tgl_sidak' => $tgl_sidak,
				'petugas_sidak' => $petugas_sidak,
				'tugas_sidak' => $tugas_sidak,
				'tembusan' => $tembusan
			);

			$result = $this->m_keluar->saveDatasuratkeluar_sidak($data);
	} elseif ($jenissurat == 'Pengecekan') {
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$bpkibu = $this->input->post('bpkibu');
			$namatjn = $this->input->post('namatujuan');
			$namatujuan = $bpkibu." ".$namatjn ;
			$nmjabatan = $this->input->post('tujuan1');
			$kttujuan = $this->input->post('tujuan');
			$tujuan = $nmjabatan." ".$kttujuan;
			$prihal = "Surat Pengecekan Transfer ";
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);	
			
			$cku = $this->input->post('cku');
			$norektrs = $this->input->post('norektransfer');
			$tgltransfer = $this->input->post('tgltransfer');
			$namatransfer = $this->input->post('namatransfer');
			$norekpentransfer = $this->input->post('norekpentransfer');
			$nominal = $this->input->post('nominal');
			$hasil = $this->input->post('hasil');
			$tglkonfirmasi = $this->input->post('tglkonfirmasi');


			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'cku' => $cku,
				'norektrs' => $norektrs,
				'tgltransfer' => $tgltransfer,
				'namatransfer' => $namatransfer,
				'norekpentransfer' => $norekpentransfer,
				'nominal' => $nominal,
				'hasil' => $hasil,
				'tglkonfirmasi' => $tglkonfirmasi
				
				
			);

			$result = $this->m_keluar->saveDatasuratkeluar($data,$data2,$jenissurat,$prihal);	

		} elseif ($jenissurat == 'Intruksi') {
			//auto number no surat
			$data= $this->m_keluar->getNoSurat();		
			foreach($data as $row  => $val) {
	            	$surat = $val->no_surat;
	    	}
	    	//Post untuk tabel Skeluar
	        $no = $surat + 1;
			$nosurat = $this->input->post('nosurat');
			$bpkibu = $this->input->post('bpkibu');
			$namatjn = $this->input->post('namatujuan');
			$namatujuan = $bpkibu." ".$namatjn ;
			$nmjabatan = $this->input->post('tujuan1');
			$kttujuan = $this->input->post('tujuan');
			$tujuan = $nmjabatan." ".$kttujuan;
			$prihal = "Surat Intruksi Transfer Kekurangan Storan";
			$userid = $this->input->post('userid');
			$tanggal = $this->input->post('tanggal');

			$data = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'status' => 'Proses',
				'tgl_SuratKeluar' => $tanggal,
				'userid' => $userid
			);	
			
			$ckuitf = $this->input->post('ckuitf');
			$pembayaransiswa = $this->input->post('pembayaransiswa');
			$kuitansisetor = $this->input->post('kuitansisetor');
			$tgl_lappem = $this->input->post('tgl_lappem');
			$nokuitansi = $this->input->post('nokuitansi');
			$petugas_kuitansi = $this->input->post('petugas_kuitansi');
			$tgl_waset = $this->input->post('tgl_waset');
			$tgl_tanter = $this->input->post('tgl_tanter');


			$data2 = array(
				'no' => $no,
				'no_surat' => $nosurat,
				'ckuitf' => $ckuitf,
				'pembayaransiswa' => $pembayaransiswa,
				'kuitansisetor' => $kuitansisetor,
				'tgl_lappem' => $tgl_lappem,
				'nokuitansi' => $nokuitansi,
				'petugas_kuitansi' => $petugas_kuitansi,
				'tgl_waset' => $tgl_waset,
				'tgl_tanter' => $tgl_tanter
				
				
				
			);

			$result = $this->m_keluar->saveDatasuratkeluar($data,$data2,$jenissurat,$prihal);		
		}



	if ($result) {
		$this->session->set_flashdata('success','Data Berhasil Disimpan !');
	    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
	    redirect(base_url('skeluar/data_table'), 'refresh');
	} else {
		$this->session->set_flashdata('success','Ada kesalahan saat menyimpan.');
	    $this->session->set_flashdata('message','Mohon Input kembali.Terimakasih');
	    redirect(base_url('skeluar/data_table'), 'refresh');
	}
	} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
}


	public function hapusDatasuratkeluar($no,$jenissurat,$prihal)
	{
		if ($this->session->userdata('log_in')) {
		if (($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20ACC%20Pencairan%20Fee%20Bimker')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20Fee%20Bimker')){
			$prihal = 1;
		} elseif(($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20Tidak%20ACC%20Diskon%20Susulan')) {
			$prihal = 2;
		} elseif(($prihal == 'Surat%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20ACC%20Diskon%20Susulan')) {
			$prihal = 3;
		}

		$where = array(
			'no'=> $no
		);

		if($jenissurat == 'Pencairan' and $prihal == 1){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where,$prihal);
		} elseif ($jenissurat == 'Pencairan'  and $prihal == 2 ) {	
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where,$prihal);
		} elseif ($jenissurat == 'Pencairan'  and $prihal == 3 ) {	
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where,$prihal);
		} elseif($jenissurat == 'Peringatan'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);		
		} elseif($jenissurat == 'Teguran'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);	
		} elseif($jenissurat == 'Pembayaran'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);	
		} elseif($jenissurat == 'Transfer'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);	
		} elseif($jenissurat == 'Pengecekan'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);	
		} elseif($jenissurat == 'Intruksi'){
			$data = $this->m_keluar->deleteDatasuratkeluar($jenissurat,$where);	
		}
		
		if ($data >= 1) {
	      $this->session->set_flashdata('success','Data berhasil dihapus!');
	      $this->session->set_flashdata('message','Periksa kembali data Surat.');
	      redirect(base_url('skeluar/data_table'), 'refresh');
	    }
	    } else {
    	  redirect(site_url('login'), 'refresh');
    	}	
		
	}

	public function hapusDatasuratkeluar_sidak($no)
	{
		if ($this->session->userdata('log_in')) {
		$where = array(
			'no'=> $no
		);

		$data = $this->m_keluar->deleteDatasuratkeluar_sidak($where);	
		
		
		if ($data >= 1) {
	      $this->session->set_flashdata('success','Data berhasil dihapus!');
	      $this->session->set_flashdata('message','Periksa kembali data Surat.');
	      redirect(base_url('skeluar/data_table_sidak'), 'refresh');
	    }
	    } else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function lihatsuratkeluar($no,$jenis_surat,$prihal)
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
  			
		if (($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20ACC%20Pencairan%20Fee%20Bimker')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20Fee%20Bimker')) {
			$prihal = 1;
		} elseif(($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20Tidak%20ACC%20Diskon%20Susulan')) {
			$prihal = 2;
		} elseif(($prihal == 'Surat%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20ACC%20Diskon%20Susulan')) {
			$prihal = 3;
		}

		if($jenis_surat == 'Pencairan' and $prihal == 3){
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar',$data);
		}elseif($jenis_surat == 'Pencairan' and $prihal == 2){
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar_tdk_acc',$data);
		}elseif ($jenis_surat == 'Peringatan') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_speringatan',$data);
		}elseif ($jenis_surat == 'Teguran') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_steguran',$data);
		}elseif ($jenis_surat == 'Pencairan' and $prihal == 1) {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar_fee',$data);
		}elseif ($jenis_surat == 'Pembayaran') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_sposgiro',$data);
		} elseif ($jenis_surat == 'Transfer') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar_transfer($no,$jenis_surat);
			$this->template->load('template','v_lihat_skeluar_transfer',$data);
		} elseif ($jenis_surat == 'Pengecekan') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_pengecekan',$data);
		} elseif ($jenis_surat == 'Intruksi') {
			$data['lihat'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_lihat_intruksi',$data);
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	
	}

	public function lihatsuratkeluar_sidak($no)
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
		$data['lihat'] = $this->m_keluar->lihatsuratkeluar_sidak($no);
		$this->template->load('template','v_lihat_sidak',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function cetaksuratkeluar($no,$jenis_surat,$prihal)
	{
		if ($this->session->userdata('log_in')) {
		if (($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20ACC%20Pencairan%20Fee%20Bimker')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20Fee%20Bimker')) {
			$prihal = 1;
		} elseif(($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20Tidak%20ACC%20Diskon%20Susulan')) {
			$prihal = 2;
		} elseif(($prihal == 'Surat%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20ACC%20Diskon%20Susulan')) {
			$prihal = 3;
		}

		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
  			$data['nama_lengkap'] = $user['nama_lengkap'];

		if($jenis_surat == 'Pencairan' and $prihal == 3 ){
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_pengembalian', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		   	
		}elseif($jenis_surat == 'Pencairan' and $prihal == 2 ){
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			
			$this->load->library('pdf');

			$this->load->view('v_cetak_Surat_tidak_pengembalian', $data);
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
		}elseif ($jenis_surat == 'Pembayaran') {
			$user = $this->model->getuser();
			$data['username'] = $user['username'];
	  		$data['jabatan'] = $user['jabatan'];
	  		$data['id'] = $user['id'];
	  		$data['nama_lengkap'] = $user['nama_lengkap'];
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);

			$this->load->view('v_cetak_Surat_posgiro', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		}elseif ($jenis_surat == 'Transfer') {
			$user = $this->model->getuser();
			$data['username'] = $user['username'];
	  		$data['jabatan'] = $user['jabatan'];
	  		$data['id'] = $user['id'];
	  		$data['nama_lengkap'] = $user['nama_lengkap'];
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar_transfer($no);

			$this->load->view('v_cetak_Surat_transfer', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		}elseif ($jenis_surat == 'Pengecekan') {
			$user = $this->model->getuser();
			$data['username'] = $user['username'];
	  		$data['jabatan'] = $user['jabatan'];
	  		$data['id'] = $user['id'];
	  		$data['nama_lengkap'] = $user['nama_lengkap'];
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);

			$this->load->view('v_cetak_Surat_pengecekan', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0));
		}elseif ($jenis_surat == 'Intruksi') {
			$user = $this->model->getuser();
			$data['username'] = $user['username'];
	  		$data['jabatan'] = $user['jabatan'];
	  		$data['id'] = $user['id'];
	  		$data['nama_lengkap'] = $user['nama_lengkap'];
			$data['cetak'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);

			$this->load->view('v_cetak_Surat_intruksi', $data);
		    $html=$this->output->get_output();
		    $this->pdf->load_html($html);
		    $this->pdf->setPaper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("laporan.pdf",array('Attachment'=>0));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}
	
	public function cetak_sidak($no)
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
  		$data['jabatan'] = $user['jabatan'];
  		$data['id'] = $user['id'];
  		$data['nama_lengkap'] = $user['nama_lengkap'];
		$data['cetak'] = $this->m_keluar->lihatsuratkeluar_sidak($no);

		$this->load->view('v_cetak_Surat_sidak', $data);
	    $html=$this->output->get_output();
	    $this->pdf->load_html($html);
	    $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->render();
		$this->pdf->stream("laporan.pdf",array('Attachment'=>0)); 
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function ubahDataskeluar($no,$jenis_surat,$prihal)
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];
		$data['nama_lengkap'] = $user['nama_lengkap'];

		if (($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20ACC%20Pencairan%20Fee%20Bimker')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20Fee%20Bimker')){
			$prihal = 1;
		} elseif(($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20Tidak%20ACC%20Diskon%20Susulan')) {
			$prihal = 2;
		} elseif(($prihal == 'Surat%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20ACC%20Diskon%20Susulan')) {
			$prihal = 3;
		}

		if($jenis_surat == 'Pencairan' and $prihal == 3){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_pencairan',$data);
		} elseif($jenis_surat == 'Pencairan' and $prihal == 2){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_Tidak_pencairan',$data);
		} else if(($jenis_surat == 'Pencairan' and $prihal == 1)){
			$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar_fee($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_fee',$data);
		} else if(($jenis_surat == 'Peringatan')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_peringatan',$data);
		} else if(($jenis_surat == 'Teguran')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_teguran',$data);
		} else if(($jenis_surat == 'Pembayaran')){
			$data['ubahskeluar'] = $this->m_keluar->ubahsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_sposgiro',$data);
		} else if(($jenis_surat == 'Transfer')){
			$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar_transfer($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_transfer',$data);
		} else if(($jenis_surat == 'Pengecekan')){
			$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_pengecekan',$data);
		} else if(($jenis_surat == 'Intruksi')){
			$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar($no,$jenis_surat);
			$this->template->load('template','v_update_skeluar_intruksi',$data);
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}
	
	public function ubahsuratkeluar_sidak($no)
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		$data['ubahskeluar'] = $this->m_keluar->lihatsuratkeluar_sidak($no);
		$this->template->load('template','v_update_skeluar_sidak',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function gantiDataskeluar()
	{
		if ($this->session->userdata('log_in')) {
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
		// $userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$tglmarketing = $this->input->post('tglmarketing');
		$unit = $this->input->post('unit');

		$data = array(
			'no_surat' => $nosurat,
			'perihal' => $prihal,
			'nama_tujuan' => $namatujuan,
			'tujuan' => $tujuan,
			'jenis_surat' => $jenissurat,
			// 'userid' => $userid,
			'tgl_SuratKeluar' => $tanggal
			

		);

		$data2 = array(
			'no_surat' => $nosurat,
			'tgl_marketing' => $tglmarketing,
			'unit' => $unit,
			'nama_siswa' => $namasiswa,
			'kelas' => $kelas,
			'jumlahbayar' => $jumlahbayar,
			'pengembaliannorek' => $pengembaliannorek,
			'tembusan' => $tembusan
		);

		$where = [
			'no' => $no
		];

		$result = $this->m_keluar->updateDatasuratkeluar($data,$data2, $where,$jenissurat,$prihal);

		if ($result) {
		$this->session->set_flashdata('success','Data Berhasil Diubah !');
	    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
	    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function gantiDatasperingatan()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		$tembusan = $this->input->post('tembusan');
		// $userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$loktujuan = $this->input->post('loktujuan');
		$kesalahan = $this->input->post('kesalahan');
		$tembusan = $this->input->post('tembusan');


			$data = array(
				'no_surat' => $nosurat,
				'perihal' => $prihal,
				'nama_tujuan' => $namatujuan,
				'tujuan' => $tujuan,
				'jenis_surat' => $jenissurat,
				'tgl_SuratKeluar' => $tanggal
				// 'userid' => $userid

			);

			$data2 = array(
				'no_surat' => $nosurat,
				'loktujuan' => $loktujuan,
				'kesalahan' => $kesalahan,
				'tembusan' => $tembusan
			);

			$where = [
				'no' => $no
			];

			$result = $this->m_keluar->updateDatasuratkeluar($data,$data2, $where,$jenissurat,$prihal);
			
			if ($result) {
			  $this->session->set_flashdata('success','Data berhasil di ubah!');
		      $this->session->set_flashdata('message','Periksa kembali data Surat.');
		      redirect(base_url('skeluar/data_table'), 'refresh');
			} else {
				redirect(base_url('skeluar/ubahDatasmasuk'));
			}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function gantiDatasidak()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$perihal = $this->input->post('perihal_sidak');
		$nama_penerima = $this->input->post('namapenerima_sidak');
		$tujuan = $this->input->post('tujuan_sidak');
		$tgl_sidak = $this->input->post('tgl_sidak');
		$petugas_sidak = $this->input->post('petugas_sidak');
		$tugas_sidak = $this->input->post('tugas_sidak');
		$tembusan = $this->input->post('tembusan_sidak');

		$data = array(
			'no' => $no,
			'no_surat' => $nosurat,
			'perihal' => $perihal,
			'nama_penerima' => $nama_penerima,
			'tujuan_penerima' => $tujuan,
			'tgl_sidak' => $tgl_sidak,
			'petugas_sidak' => $petugas_sidak,
			'tugas_sidak' => $tugas_sidak,
			'tembusan' => $tembusan
		);

			$where = [
				'no' => $no
			];

			$result = $this->m_keluar->updateDatasuratkeluar_sidak($data, $where);

			if ($result) {
			  $this->session->set_flashdata('success','Data berhasil di ubah!');
		      $this->session->set_flashdata('message','Periksa kembali data Surat.');
		      redirect(base_url('skeluar/data_table_sidak'), 'refresh');
			} else {
				redirect(base_url('skeluar/index'));
			}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function gantiDatasteguran()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		// $userid = $this->input->post('userid');
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
			'tgl_SuratKeluar' => $tanggal
			// 'userid' => $userid

		);

		$data2 = array(
			'no_surat' => $nosurat,
			'pemeriksa' => $pemeriksa,
			'bgn_tegur' => $bgntegur,
			'teguran' => $tegur,
			'penutup' => $penutup,
			'tembusan' => $tbsteguran
		);

		$where = [
			'no' => $no
		];

		$result = $this->m_keluar->updateDatasuratkeluar($data,$data2, $where,$jenissurat,$prihal);
		
		if ($result) {
		$this->session->set_flashdata('success','Data Berhasil Diubah !');
	    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
	    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function gantiDataskeluar_fee()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');

		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		// $userid = $this->input->post('userid');
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
			'tgl_SuratKeluar' => $tanggal
			// 'userid' => $userid

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
			$add[]=array(
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
			// $result2 = $this->m_keluar->saveDatasuratkeluar3($add);
		}

		$result = $this->m_keluar->updateDatasuratkeluar($data,$add,$where,$jenissurat,$prihal);

		if ($result) {
			$this->session->set_flashdata('success','Data Berhasil Diubah !');
		    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function gantiDatasposgiro()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		// $userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$periode = $this->input->post('periode');
		$totaltagihan = $this->input->post('totaltagihan');
		$norek = $this->input->post('norek');
		
		$data = array(
			'no_surat' => $nosurat,
			'perihal' => $prihal,
			'nama_tujuan' => $namatujuan,
			'tujuan' => $tujuan,
			'jenis_surat' => $jenissurat,
			'tgl_SuratKeluar' => $tanggal
			// 'userid' => $userid

		);

		$data2 = array(
			'no_surat' => $nosurat,
			'periodepengiriman' => $periode,
			'totaltagihan' => $totaltagihan,
			'norek' => $norek
			
		);

		$where = [
			'no' => $no
		];

		$result = $this->m_keluar->updateDatasuratkeluar($data,$data2, $where,$jenissurat,$prihal);
		
		if ($result) {
			$this->session->set_flashdata('success','Data Berhasil Diubah !');
		    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function gantiDataskeluar_transfer()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		// $userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');

		$jenis_pencairan = $this->input->post('jenis_pencairan');
		$tgl_pencairan = $this->input->post('tgl_pencairan');
		$input = $this->input->post();
		$total_post= count($this->input->post('sekolah'));
		
		$data= array(
			'no' => $no,
			'no_surat' => $nosurat,
			'perihal' => $prihal,
			'tgl_SuratKeluar' => $tanggal
			// 'userid' => $userid

		);
		
		$where = [
			'no' => $no
		];
		$where2 = [
			'no' => $no
		];
		if ($jenis_pencairan == "mgm"){ 
			$input = $this->input->post();
			$total_post= count($this->input->post('bank_m'));
		
			$this->m_keluar->deleteDatasuratkeluar_transfer($where2);

			foreach ($input['bank_m'] as $key => $val) {
				$add[]=array(
					'no' => $no,
					'no_surat' => $nosurat,
					'tgl_pencairan' => $tgl_pencairan,
					'jenis_pencairan' => $jenis_pencairan,
					'bank' => $input['bank_m'][$key],
					'jml_order_mgm' => $input['jmlor_mgm_m'][$key],
					'jml_siswa_mgm' => $input['jmlsis_mgm_m'][$key],
					'tot_order' => $input['jmlor_mgm_m'][$key],
					'tot_siswa' => $input['jmlsis_mgm_m'][$key]
					);			
			}
		} elseif ($jenis_pencairan == "pengembalian biaya") {
			$input = $this->input->post();
			$total_post= count($this->input->post('bank_b'));
		
			$this->m_keluar->deleteDatasuratkeluar_transfer($where2);

			foreach ($input['bank_b'] as $key => $val) {
				$add[]=array(
					'no' => $no,
					'no_surat' => $nosurat,
					'tgl_pencairan' => $tgl_pencairan,
					'jenis_pencairan' => $jenis_pencairan,
					'bank' => $input['bank_b'][$key],
					'jml_order_biaya' => $input['jmlor_biaya_b'][$key],
					'jml_siswa_biaya' => $input['jmlsis_biaya_b'][$key],
					'tot_order' => $input['jmlor_biaya_b'][$key],
					'tot_siswa' => $input['jmlsis_biaya_b'][$key]
					);			
			}
		}elseif ($jenis_pencairan == "mgm dan pengembalian biaya") {
			$input = $this->input->post();
			$total_post= count($this->input->post('bank_mb'));
		
			$this->m_keluar->deleteDatasuratkeluar_transfer($where2);

			foreach ($input['bank_mb'] as $key => $val) {
				$add[]=array(
					'no' => $no,
					'no_surat' => $nosurat,
					'tgl_pencairan' => $tgl_pencairan,
					'jenis_pencairan' => $jenis_pencairan,
					'bank' => $input['bank_mb'][$key],
					'jml_order_mgm' => $input['jmlor_mgm_mb'][$key],
					'jml_siswa_mgm' => $input['jmlsis_mgm_mb'][$key],
					'jml_order_biaya' => $input['jmlor_biaya_mb'][$key],
					'jml_siswa_biaya' => $input['jmlsis_biaya_mb'][$key],
					'tot_order' => $input['jmlor_mgm_mb'][$key] + $input['jmlor_biaya_mb'][$key],
					'tot_siswa' => $input['jmlsis_mgm_mb'][$key] + $input['jmlsis_biaya_mb'][$key]
					);			
				// $result2 = $this->m_keluar->saveDatasuratTransfer($add);
			}
		}
		$result = $this->m_keluar->updateDatasuratkeluar($data,$add,$where,$jenissurat,$prihal);

		if ($result) {
			$this->session->set_flashdata('success','Data Berhasil Diubah !');
		    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function gantiDataPengecekan()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		// $userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$cku = $this->input->post('cku');
		$norektrs = $this->input->post('norektransfer');
		$tgltransfer = $this->input->post('tgltransfer');
		$namatransfer = $this->input->post('namatransfer');
		$norekpentransfer = $this->input->post('norekpentransfer');
		$nominal = $this->input->post('nominal');
		$hasil = $this->input->post('hasil');
		$tglkonfirmasi = $this->input->post('tglkonfirmasi');


		$data2 = array(
			'no' => $no,
			'no_surat' => $nosurat,
			'cku' => $cku,
			'norektrs' => $norektrs,
			'tgltransfer' => $tgltransfer,
			'namatransfer' => $namatransfer,
			'norekpentransfer' => $norekpentransfer,
			'nominal' => $nominal,
			'hasil' => $hasil,
			'tglkonfirmasi' => $tglkonfirmasi
			
			
		);
		
		$data = array(
			'no_surat' => $nosurat,
			'perihal' => $prihal,
			'nama_tujuan' => $namatujuan,
			'tujuan' => $tujuan,
			'jenis_surat' => $jenissurat,
			'tgl_SuratKeluar' => $tanggal
			// 'userid' => $userid

		);

		$where = [
			'no' => $no
		];

		$result = $this->m_keluar->updateDatasuratkeluar($data,$data2,$where,$jenissurat,$prihal);

		if ($result) {
			$this->session->set_flashdata('success','Data Berhasil Diubah !');
		    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function gantiDataIntruksi()
	{
		if ($this->session->userdata('log_in')) {
		$no = $this->input->post('no');
		$nosurat = $this->input->post('nosurat');
		$prihal = $this->input->post('prihal');
		$namatujuan = $this->input->post('namatujuan');
		$tujuan = $this->input->post('tujuan');
		$jenissurat = $this->input->post('cjenissurat_update');
		$userid = $this->input->post('userid');
		$tanggal = $this->input->post('tanggal');
		$ckuitf = $this->input->post('ckuitf');
		$pembayaransiswa = $this->input->post('pembayaransiswa');
		$kuitansisetor = $this->input->post('kuitansisetor');
		$tgl_lappem = $this->input->post('tgl_lappem');
		$nokuitansi = $this->input->post('nokuitansi');
		$petugas_kuitansi = $this->input->post('petugas_kuitansi');
		$tgl_waset = $this->input->post('tgl_waset');
		$tgl_tanter = $this->input->post('tgl_tanter');


		$data2 = array(
			'no' => $no,
			'no_surat' => $nosurat,
			'ckuitf' => $ckuitf,
			'pembayaransiswa' => $pembayaransiswa,
			'kuitansisetor' => $kuitansisetor,
			'tgl_lappem' => $tgl_lappem,
			'nokuitansi' => $nokuitansi,
			'petugas_kuitansi' => $petugas_kuitansi,
			'tgl_waset' => $tgl_waset,
			'tgl_tanter' => $tgl_tanter

		);
		
		$data = array(
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

		$result = $this->m_keluar->updateDatasuratkeluar($data,$data2,$where,$jenissurat,$prihal);

		if ($result) {
			$this->session->set_flashdata('success','Data Berhasil Diubah !');
		    $this->session->set_flashdata('message','Tekan tombol Cetak untuk melihat hasilnya.');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		} else {
			redirect(base_url('skeluar/ubahDatasmasuk'));
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function search()
	{
		if ($this->session->userdata('log_in')) {
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
			'status'=>$keyword
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
		 } else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}
	
	public function search_sidak()
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
		$data['username'] = $user['username'];
		$data['jabatan'] = $user['jabatan'];
		$data['id'] = $user['id'];

		$keyword = $this->input->get('keyword');

		$search = array(
			'no'=> $keyword,
			'no_surat'=> $keyword,
			'perihal' => $keyword,
			'nama_penerima' =>$keyword,
			'tujuan_penerima'=>$keyword,
			'tgl_sidak'=>$keyword
		);

		$page = $this->input->get('per_page');
		$batas = 5;
		if (!$page) {
			$offset = 0;
		} else {
			$offset = $page;
		}

		$config['page_query_string'] = TRUE;
		$config['base_url'] = base_url().'Skeluar/search_sidak/?'.$keyword;
		$config['total_rows'] = $this->m_keluar->count_skeluar_search_sidak($search);
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
		$data['paging_sidak']=$this->pagination->create_links();
		$data['jlhpage']=$page;

		$data['sidak'] = $this->m_keluar->data_sidak($batas, $offset, $search);

		 $this->template->load('template','v_data_skeluar_sidak',$data);
		 } else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function gantistatus($no,$status)
	{
		if ($this->session->userdata('log_in')) {
		$data2 = array('status' => $status );
		$where = ['no' => $no ];

		$data = $this->m_keluar->gantistatus($data2,$where);

		if($data){
			$this->session->set_flashdata('success','Status Data berhasil diubah !');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		}else{
			$this->session->set_flashdata('success','Status Data Tidak Berhasil diubah !');
		    redirect(base_url('skeluar/data_table'), 'refresh');
		}
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}
}