<?php 

class m_user extends CI_Model
{
	//model Surat masuk

	function data($batas=null, $offset=null, $key=null)
	  {
	    if($batas != null) {
	       $this->db->limit($batas,$offset);
	    }
	    if ($key != null) {
	       $this->db->or_like($key);
	    }
	    $this->db->from('user');
	    $this->db->order_by('id','DESC');
		$this->db->order_by("nama_lengkap", "asc");

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

	function jumlah_data(){
		return $this->db->get('user')->num_rows();
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