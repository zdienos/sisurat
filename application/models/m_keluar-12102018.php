<?php 

class M_keluar extends CI_Model
{
	//model Surat keluar

	function viewDatasuratkeluar()
	{
		$this->db->from('skeluar');

		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function getNoSurat()
	{
		$this->db->select_max('no','no_surat');
		$query = $this->db->get('skeluar');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function lihatsuratkeluar($no,$jenis_surat)
	{
		if(($jenis_surat == 'Pencairan') or($jenis_surat == 'Pencairan')) {
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_tidak_kuota', 'skeluar.no = tb_sk_tidak_kuota.no');
		    $this->db->where('skeluar.no', $no);
		}elseif($jenis_surat == 'Teguran'){

		}

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	function getDatasuratkeluar($where)
	{
		$this->db->from('skeluar');
		$this->db->where($where);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}

	function saveDatasuratkeluar($data)
	{
		$data = $this->db->insert('skeluar', $data);

		if ($data) {
			return true;
		} else {
			return false;
		}
	}

	function saveDatasuratkeluar2($data2)
	{
		$data2 = $this->db->insert('tb_sk_tidak_kuota', $data2);

		if ($data2) {
			return true;
		} else {
			return false;
		}
	}
	
	function ubahsuratkeluar($no,$jenis_surat)
	{
		if(($jenis_surat == 'Pencairan') or ($jenis_surat == 'Pencairan')){
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_tidak_kuota', 'skeluar.no = tb_sk_tidak_kuota.no');
		    $this->db->where('skeluar.no', $no);
		}elseif($jenis_surat == 'Pengembalian%20Tidak%20Kuota'){

		}

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}


 
 	function updateDatasuratkeluar($data, $where)
 	{
 		$data = $this->db->update('skeluar', $data, $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}

 	function deleteDatasuratkeluar($where)
 	{
 		$data = $this->db->delete('skeluar', $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}

 	function deleteDatasuratkeluar2($where2)
 	{
 		$data2 = $this->db->delete('tb_sk_tidak_kuota', $where2);

 		if ($data2) {
			return true;
		} else {
			return false;
		}
 	}
}
?>