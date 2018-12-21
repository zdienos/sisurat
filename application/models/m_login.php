<?php

class M_login extends CI_Model {
  function login($username, $password)
  {
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

  function getuser()
  {
    $sess_array = $this->session->userdata('log_in');
    $where = $sess_array['id'];


    $this->db->from('user');
    $this->db->where('id', $where);

    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return $query->row_array();
    } else {
      return false;
    }
  }

}