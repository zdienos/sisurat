<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
    $data['title'] = "SI Surat";
  	$this->form_validation->set_rules('username','Username','trim|required');
    $this->form_validation->set_rules('password','Password','trim|required|callback_db_cek');
    if ($this->form_validation->run() == false) {
      $this->load->view('v_login', $data);
    } else {
      redirect(base_url('home'), 'refresh');
    }
	}

  function db_cek($password)
  {
    $username = $this->input->post('username');
    $user = $this->model->login($username, $password);
    if ($user) {
      foreach ($user as $u) {
        $sess_array = array(
          'id' => $u->id,
          'jabatan' => $u->jabatan,
          'username' => $u->username);
        $this->session->set_userdata('log_in', $sess_array);
      }
      return true;
    } else {
      $this->form_validation->set_message('db_cek', '<center>Invalid Username or Password<br /> (Nama Pengguna atau Kata Sandi salah)</center>');
      return false;
    }
  }

   public function logout()
  {
    $this->session->unset_userdata('log_in');
    $this->session->sess_destroy();
    redirect(site_url('login'), 'refresh');
  }


}
