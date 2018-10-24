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

	function data($batas=null, $offset=null, $key=null)
	  {
	    if($batas != null) {
	       $this->db->limit($batas,$offset);
	    }
	    if ($key != null) {
	       $this->db->or_like($key);
	    }
	    $this->db->from('skeluar');
	    $this->db->order_by('no','DESC');

	    $query = $this->db->get();
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	      return false;
	    }
	  }
 
	function jumlah_data(){
		return $this->db->get('skeluar')->num_rows();
	}

	function count_skeluar_search($orlike)
	  {
	    $this->db->from('skeluar');
	    $this->db->or_like($orlike);

	    $query = $this->db->get()->num_rows();
	    return $query;
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
		}elseif(($jenis_surat == 'Peringatan') or($jenis_surat == 'Peringatan')) {
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_peringatan', 'skeluar.no = tb_sk_peringatan.no');
		    $this->db->where('skeluar.no', $no);
		}elseif(($jenis_surat == 'Teguran') or($jenis_surat == 'Teguran')) {
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_teguran', 'skeluar.no = tb_sk_teguran.no');
		    $this->db->where('skeluar.no', $no);
		}elseif(($jenis_surat == 'Pembayaran') or($jenis_surat == 'Pembayaran')) {
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_pos_giro', 'skeluar.no = tb_sk_pos_giro.no');
		    $this->db->where('skeluar.no', $no);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}


	function lihatsuratkeluar_fee($no,$jenis_surat)
	{
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_pencairan_fee', 'skeluar.no = tb_sk_pencairan_fee.no','left');
		    $this->db->where('skeluar.no', $no);

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

	function saveDatasuratkeluar3($add)
	{
		$data = $this->db->insert('tb_sk_pencairan_fee', $add);	

		if ($data) {
			return true;
		} else {
			return false;
		}
	}

	function saveDatasperingatan($data2)
	{
		$data2 = $this->db->insert('tb_sk_peringatan', $data2);

		if ($data2) {
			return true;
		} else {
			return false;
		}
	}

	function saveDatasteguran($data2)
	{
		$data2 = $this->db->insert('tb_sk_teguran', $data2);

		if ($data2) {
			return true;
		} else {
			return false;
		}
	}

	function saveDataspembayaran($data2)
	{
		$data2 = $this->db->insert('tb_sk_pos_giro', $data2);

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
		}elseif($jenis_surat == 'Peringatan'){
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_peringatan', 'skeluar.no = tb_sk_peringatan.no');
		    $this->db->where('skeluar.no', $no);
		}elseif($jenis_surat == 'Teguran'){
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_teguran', 'skeluar.no = tb_sk_teguran.no');
		    $this->db->where('skeluar.no', $no);
		}elseif($jenis_surat == 'Pembayaran'){
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_pos_giro', 'skeluar.no = tb_sk_pos_giro.no');
		    $this->db->where('skeluar.no', $no);
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

 	function updateDatasuratkeluar2($data2, $where,$jenis_surat)
 	{
 		if ($jenis_surat == "Pencairan"){
 			$data = $this->db->update('tb_sk_tidak_kuota', $data2, $where);	
 		} elseif ($jenis_surat == "Peringatan") {
 			$data = $this->db->update('tb_sk_peringatan', $data2, $where);	
 		} elseif ($jenis_surat == "Teguran") {
 			$data = $this->db->update('tb_sk_teguran', $data2, $where);	
 		} elseif ($jenis_surat == "Pembayaran") {
 			$data = $this->db->update('tb_sk_pos_giro', $data2, $where);	
 		}

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}

 	function deleteDatasuratkeluar($jenis_surat,$where,$prihal=Null)
 	{
 		if ($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif'){
			$prihal = 1;
		}

 		
 		if($jenis_surat == 'Pencairan' and $prihal != 1){
 			$data = $this->db->delete('skeluar', $where);
 			$data2 = $this->db->delete('tb_sk_tidak_kuota', $where);
 		} elseif ($jenis_surat == 'Peringatan') {
 			$data = $this->db->delete('skeluar', $where);
			$data2 = $this->db->delete('tb_sk_peringatan', $where);
 		} elseif ($jenis_surat == 'Teguran') {
 			$data = $this->db->delete('skeluar', $where);
			$data2 = $this->db->delete('tb_sk_teguran', $where);
 		} elseif ($jenis_surat == 'Pencairan'  and $prihal == 1 ) {
 			$data = $this->db->delete('skeluar', $where);
 			$data2 = $this->db->delete('tb_sk_pencairan_fee', $where);
 		} elseif ($jenis_surat == 'Pembayaran') {
 			$data = $this->db->delete('skeluar', $where);
			$data2 = $this->db->delete('tb_sk_pos_giro', $where);
 		}

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}
 	function deleteDatasuratkeluar_fee($where3)
 	{
 		$data3 = $this->db->delete('tb_sk_pencairan_fee', $where3);

 		if ($data3) {
			return true;
		} else {
			return false;
		}
 	}

 	function cekperingatan($nip,$spke)
 	{
 		$this->db->from('tb_sk_peringatan');
		$this->db->where('nip',$nip);
		$this->db->where('spke',$spke);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return $query = '';
		}
 	}
}
?>