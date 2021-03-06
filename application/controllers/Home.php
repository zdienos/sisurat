<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_home');
	  }
	public function index()
	{
		if ($this->session->userdata('log_in')) {
			$user = $this->model->getuser();
  			$data['username'] = $user['username'];
  			$data['jabatan'] = $user['jabatan'];
  			$data['id'] = $user['id'];
			$data['datasmasuk'] = $this->m_home->count_smasuk();
			$data['dataskeluar'] = $this->m_home->count_skeluar();
			$this->template->load('template','home',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

}
