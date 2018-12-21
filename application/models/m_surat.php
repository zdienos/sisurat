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

	function lihatperihal()
	{
		// $this->db->distinct('bagian_pengirim');
		$this->db->select('distinct(bagian_pengirim)');
		$this->db->from('tb_sm_perihal');
		$this->db->order_by('bagian_pengirim ASC');

		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function jenissurat($bagian_pengirim){

		   $hasil=$this->db->query("SELECT * FROM tb_sm_perihal WHERE bagian_pengirim='$bagian_pengirim'");
        return $hasil->result();
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

	function saveDataperihal($data)
	{
		$data = $this->db->insert('tb_sm_perihal', $data);

		if ($data) {
			return true;
		} else {
			return false;
		}
	}

	function getDatasuratmasuk($where)
	{
		$this->db->from('smasuk');
		$this->db->join('tb_sm_perihal', 'smasuk.id_kelompok = tb_sm_perihal.id_kelompok','left');
		$this->db->where('smasuk.id', $where);
		// $this->db->from('smasuk');
		// $this->db->where($where);

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