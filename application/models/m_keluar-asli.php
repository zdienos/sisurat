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

	  function data_sidak($batas=null, $offset=null, $key=null)
	  {
	    if($batas != null) {
	       $this->db->limit($batas,$offset);
	    }
	    if ($key != null) {
	       $this->db->or_like($key);
	    }
	    $this->db->from('tb_sk_sidak');
	    $this->db->order_by('no','DESC');

	    $query = $this->db->get();

	   // print_r($query)."zz"; exit();
	    if ($query->num_rows() > 0) {
	        return $query->result();
	    } else {
	      return false;
	    }
	  }
 
 
	function jumlah_data(){
		return $this->db->get('skeluar')->num_rows();
	}

	function jumlah_data_sidak(){
		return $this->db->get('tb_sk_sidak')->num_rows();
	}

	function count_skeluar_search($orlike)
	  {
	    $this->db->from('skeluar');
	    $this->db->or_like($orlike);

	    $query = $this->db->get()->num_rows();
	    return $query;
	  }

	  function count_skeluar_search_sidak($orlike)
	  {
	    $this->db->from('tb_sk_sidak');
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

	function getNoSurat_sidak()
	{
		$this->db->select_max('no','no_surat');
		$query = $this->db->get('tb_sk_sidak');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function lihatsuratkeluar_sidak($no)
	{
		$this->db->from('tb_sk_sidak');
	    $this->db->where('no', $no);

	    $query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result_array();
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
		}elseif(($jenis_surat == 'Pengecekan') or($jenis_surat == 'Pengecekan')) {
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_pengecekan', 'skeluar.no = tb_sk_pengecekan.no');
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

	function lihatsuratkeluar_transfer($no)
	{
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_transfer_mgmbiaya', 'skeluar.no = tb_sk_transfer_mgmbiaya.no','left');
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

	function saveDatasuratkeluar_sidak($data)
	{
		$data = $this->db->insert('tb_sk_sidak', $data);

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

	function saveDatasuratTransfer($data2)
	{
		$data2 = $this->db->insert('tb_sk_transfer_mgmbiaya', $data2);

		if ($data2) {
			return true;
		} else {
			return false;
		}
	}

	function saveDataspengecekan($data2)
	{
		$data2 = $this->db->insert('tb_sk_pengecekan', $data2);

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

 	function updateDatasuratkeluar_sidak($data, $where)
 	{
 		$data = $this->db->update('tb_sk_sidak', $data, $where);

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
 		if (($prihal == 'Surat%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20PT%20Kolektif')or($prihal == 'Surat%20ACC%20Pencairan%20Fee%20Bimker')or($prihal == 'Surat%20Tidak%20ACC%20Pencairan%20Fee%20Bimker')){
			$prihal = 1;
		} elseif(($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20Tidak%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20Tidak%20ACC%20Diskon%20Susulan')) {
			$prihal = 2;
		} elseif(($prihal == 'Surat%20ACC%20Pengembalian%20Kelas%20Tidak%20Kuota')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Anak%20Guru')or($prihal == 'Surat%20ACC%20Pengembalian%20Pindah%20Program')or($prihal == 'Surat%20ACC%20Pengembalian%20Pengalihan%20Biaya')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Karyawan')or($prihal == 'Surat%20ACC%20Pengembalian%20Diskon%20Pengajar')or($prihal == 'Surat%20ACC%20Pengembalian%20Kelebihan%20Bayar')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20PTN')or($prihal == 'Surat%20ACC%20Pengembalian%20Jaminan%20SMA%20Favorit')or($prihal == 'Surat%20ACC%20Diskon%20Susulan')) {
			$prihal = 3;
		}

 		
 		if($jenis_surat == 'Pencairan' and $prihal == 2){
 			$data = $this->db->delete('skeluar', $where);
 			$data2 = $this->db->delete('tb_sk_tidak_kuota', $where);
 		} elseif ($jenis_surat == 'Pencairan' and $prihal == 3){
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
 		} elseif ($jenis_surat == 'Transfer') {
 			$data = $this->db->delete('skeluar', $where);
			$data2 = $this->db->delete('tb_sk_transfer_mgmbiaya', $where);
 		} elseif ($jenis_surat == 'Pengecekan') {
 			$data = $this->db->delete('skeluar', $where);
			$data2 = $this->db->delete('tb_sk_pengecekan', $where);
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

 	function deleteDatasuratkeluar_sidak($where3)
 	{
 		$data3 = $this->db->delete('tb_sk_sidak', $where3);

 		if ($data3) {
			return true;
		} else {
			return false;
		}
 	}


 	function deleteDatasuratkeluar_transfer($where3)
 	{
 		$data3 = $this->db->delete('tb_sk_transfer_mgmbiaya', $where3);

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

 	function gantistatus($data, $where)
 	{
 		$data = $this->db->update('skeluar', $data, $where);

 		if ($data) {
			return true;
		} else {
			return false;
		}
 	}
}
?>