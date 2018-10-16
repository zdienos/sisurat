<?php 

class m_user extends CI_Model
{
	//model Surat masuk

	function viewDatauser()
	{
		$this->db->from('user');

		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function lihatuser($where)
	{
		$this->db->from('user');
		$this->db->where($where);

		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function saveDatauser($data)
	{
		$data = $this->db->insert('user', $data);

		if ($data) {
			return true;
		} else {
			return false;
		}
	}

	function getDatauser($where)
	{
		$this->db->from('user');
		$this->db->where($where);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}
 
 	function updateDatauser($data, $where)
 	{
 		$data = $this->db->update('user', $data, $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}

 	function deleteDatauser($where)
 	{
 		$data = $this->db->delete('user', $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}
}
?>