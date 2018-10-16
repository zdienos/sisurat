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
		//$this->load->view('home');
		if ($this->session->userdata('log_in')) {
			$data['datasmasuk'] = $this->m_home->count_smasuk();
			$data['dataskeluar'] = $this->m_home->count_skeluar();
			$this->template->load('template','home',$data);
		} else {
    	  redirect(site_url('login'), 'refresh');
    	}
	}

	public function countsmauk()
	{
		// $data['data'] = $this->m_home->count_smasuk();
		// $this->template->load('template','home',$data);
	}
}
