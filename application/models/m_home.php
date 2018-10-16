<?php 

class m_home extends CI_Model

	{
		function count_smasuk()
	  {
	    $this->db->from('smasuk');

	    $query = $this->db->get()->num_rows();
	    return $query;
	  }
	

	function count_skeluar()
	  {
	    $this->db->from('skeluar');

	    $query = $this->db->get()->num_rows();
	    return $query;
	  }
	}

?>
