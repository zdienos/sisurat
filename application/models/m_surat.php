<?php 

class M_surat extends CI_Model
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
	    $this->db->from('smasuk');
	    $this->db->order_by('id','DESC');

	    $query = $this->db->get();
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	      return false;
	    }
	  }
 
 
	function jumlah_data(){
		return $this->db->get('smasuk')->num_rows();
	}

	function count_smasuk_search($orlike)
	  {
	    $this->db->from('smasuk');
	    $this->db->or_like($orlike);

	    $query = $this->db->get()->num_rows();
	    return $query;
	  }


	function viewDatasuratmasuk()
	{
		$this->db->from('smasuk');

		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function lihatsuratmasuk($where)
	{
		$this->db->from('smasuk');
		$this->db->where($where);

		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function saveDatasuratmasuk($data)
	{
		$data = $this->db->insert('smasuk', $data);

		if ($data) {
			return true;
		} else {
			return false;
		}
	}

	function getDatasuratmasuk($where)
	{
		$this->db->from('smasuk');
		$this->db->where($where);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}
 
 	function updateDatasuratmasuk($data, $where)
 	{
 		$data = $this->db->update('smasuk', $data, $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}

 	function deleteDatasuratmasuk($where)
 	{
 		$data = $this->db->delete('smasuk', $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}
}
?>