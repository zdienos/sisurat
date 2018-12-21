<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smasuk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_surat');
	}

	public function perbaikan()
	{
		if ($this->session->userdata('log_in')) {
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
  			// print_r($user); exit();
		$this->template->load('template','data_table',$data);
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
  		$data['perihal'] = $this->m_surat->lihatperihal();
  			
  		$page = $this->input->get('per_page');	
  		$batas = 5;
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
  		$config['reuse_query_string'] = true;
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
      } else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function index()
	{
		if ($this->session->userdata('log_in')) {
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
  			$data['perihal'] = $this->m_surat->lihatperihal();
		$this->template->load('template','v_surat_masuk',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function masukanData()
	{
		if ($this->session->userdata('log_in')) {
		$nosurat = $this->input->post('nosurat');
		$hal = $this->input->post('hal');
		$kepada = $this->input->post('kepada');
		$dari = $this->input->post('dari');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
		$tgl_input = $this->input->post('tgl_input');
		$userid = $this->input->post('userid');
		$jenissurat =$this->input->post('jenissurat');

		$namafile = "SuratMasuk_".$jenissurat."_".time();
		$config['upload_path']          = './assets/arsip';
		$config['allowed_types']        = 'jpg|png|doc|pdf|zip|rar';
		$config['max_size'] 			= '3072';
		// $config['max_width']  			= '5000';
		// $config['max_height'] 			= '5000';
		$config['file_name'] 			= $namafile;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_surat')) {
			$upload = $this->upload->data();
			$upload_surat = $upload['file_name'];
		} else {
			$upload_surat = "default.png";
		}

		$data = array(
			'no_surat' => $nosurat,
			'hal' => $hal,
			'kepada' => $kepada,
			'dari' => $dari,
			'keterangan' => $keterangan,
			'tanggal' => $tanggal,
			'tgl_input' => $tgl_input,
			'userid' => $userid,
			'jenissurat' => $jenissurat,
			'arsip' => $upload_surat
		);

		$result = $this->m_surat->saveDatasuratmasuk($data);
		if($result == 1)
          {
              $this->session->set_flashdata('success','Data berhasil disimpan!');
              redirect('Smasuk/data_table', 'refresh');
          }
          else{
              $this->session->set_flashdata("message","Gagal Tersimpan");
              redirect('Smasuk/index', 'refresh');
          }
          } else {
    	  redirect(site_url('login'), 'refresh');
    	}
  
	}

	public function hapusDatasuratmasuk($id,$arsip)
	{
		if ($this->session->userdata('log_in')) {
		$where = array(
			'id'=> $id
		);
		//echo $link = FCPATH.'assets/arsip/'.$arsip);
		unlink(FCPATH.'assets/arsip/'.$arsip); 

		$result = $this->m_surat->deleteDatasuratmasuk($where);

		
		if ($result >= 1) {
	      $this->session->set_flashdata('success','Data berhasil dihapus!');
	      $this->session->set_flashdata('message','Periksa kembali data Pemohon.');
	      redirect(base_url('smasuk/data_table'), 'refresh');
	    }
	     } else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function hapusDataperihal($id)
	{
		if ($this->session->userdata('log_in')) {
		$where = array(
			'id_perihal'=> $id
		);

		$result = $this->m_surat->deleteDataperihal($where);

		
		if ($result >= 1) {
	      $this->session->set_flashdata('success','Data berhasil dihapus!');
	      $this->session->set_flashdata('message','Periksa kembali data Pemohon.');
	      redirect(base_url('smasuk/data_table'), 'refresh');
	    }
	     } else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function lihatsuratmasuk($id)
	{
		if ($this->session->userdata('log_in')) {
		$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
		$where = [
			'id' => $id
		];
		$data['lihat'] = $this->m_surat->lihatsuratmasuk($where);
		$this->template->load('template','v_lihat_smasuk',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function ubahDatasmasuk($id)
	{
		if ($this->session->userdata('log_in')) {
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];

		$where = [
			'id' => $id
		];

		$data['ubahsurat'] = $this->m_surat->getDatasuratmasuk($where);
		
		$this->template->load('template','v_update_smasuk', $data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}
	
	public function gantiDatasmasuk()
	{
		if ($this->session->userdata('log_in')) {

		$id = $this->input->post('id');
		$nosurat = $this->input->post('nosurat');
		$hal = $this->input->post('hal');
		$kepada = $this->input->post('kepada');
		$dari = $this->input->post('dari');
		$keterangan = $this->input->post('keterangan');
		$tanggal = $this->input->post('tanggal');
		$tgl_input = $this->input->post('tgl_input');
		$userid = $this->input->post('userid');
		$jenissurat =$this->input->post('jenissurat');
		$arsip_lama =$this->input->post('arsip');

		$namafile = "SuratMasuk_".$jenissurat."_".time();
			$config['upload_path']          = './assets/arsip';
			$config['allowed_types']        = 'doc|pdf|zip|rar|docx';
			$config['max_size'] 			= '5000';
			$config['file_name'] 			= $namafile;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('update_arsip')) { echo "ss";
				unlink(FCPATH.'assets/arsip/'.$arsip_lama); 
				$upload = $this->upload->data();
				$arsip = $upload['file_name'];
			} else {
				$arsip = $arsip_lama;
			}


		$data = array(
			'no_surat' => $nosurat,
			'hal' => $hal,
			'kepada' => $kepada,
			'dari' => $dari,
			'keterangan' => $keterangan,
			'tanggal' => $tanggal,
			'tgl_input' => $tgl_input,
			'userid' => $userid,
			'arsip' => $arsip,
			'jenissurat' => $jenissurat
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
			'id'=> $keyword,
			'no_surat'=> $keyword,
			'hal' => $keyword,
			'kepada' =>$keyword,
			'dari'=>$keyword,
			'keterangan'=>$keyword,
			'tanggal'=>$keyword,
		);

		$page = $this->input->get('per_page');
		$batas = 5;
		if (!$page) {
			$offset = 0;
		} else {
			$offset = $page;
		}
		$config['reuse_query_string'] = true;
		$config['page_query_string'] = TRUE;
		$config['base_url'] = base_url().'Smasuk/search/?';
		$config['total_rows'] = $this->m_surat->count_smasuk_search($search);
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

		$data['link'] = $this->m_surat->data($batas, $offset, $search);

		 $this->template->load('template','v_data_smasuk',$data);
		 } else {
    	  redirect(site_url('login'), 'refresh');
    	}	
	}

	public function input_perihal()
	{
	    if ($this->session->userdata('log_in')) {
	    $perihal = $this->input->post('perihal');
	    $jenissurat = $this->input->post('jenissurat');
	    

	    $data = array(
	      'perihal' => $perihal,
	      'jenissurat' => $jenissurat
	    );

	    $result = $this->m_surat->saveDataperihal($data);
	    if($result == 1)
	          {
	              $this->session->set_flashdata('success','Data berhasil disimpan!');
	              redirect('Smasuk/data_table', 'refresh');
	          }
	          else{
	              $this->session->set_flashdata("message","Gagal Tersimpan");
	              redirect('Smasuk/index', 'refresh');
	          }
	          } else {
	        redirect(site_url('login'), 'refresh');
	      }
	  
	}
}
