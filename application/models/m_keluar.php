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
	  function search($batas=null, $offset=null, $key=null)
	  {
	    //echo $key['perihal'];
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

	 function filter($batas=null, $offset=null, $key=null)
	  {
	    //echo $key['perihal'];
	  	if($batas != null) {
	       $this->db->limit($batas,$offset);
	    }
	    //print_r($key);
	    if ($key['status'] != "Pilih Status") { 
	    	$this->db->where('status',$key['status']);
	    }
	    if ($key['perihal'] != "Pilih Perihal") { 
	    	$this->db->where('perihal',$key['perihal']);
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

	function count_filter($key)
	  {
	    $this->db->from('skeluar');
	    if ($key['status'] != "Pilih Status") {
	    	$this->db->where('status',$key['status']);
	    }
	    if ($key['perihal'] != "Pilih Perihal") { 
	    	$this->db->where('perihal',$key['perihal']);
	    };

	    $query = $this->db->get()->num_rows();
	    return $query;
	  }
	function count_search($key)
	  {
	    $this->db->from('skeluar');
	    $this->db->or_like($key);

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
		}elseif(($jenis_surat == 'Intruksi') or($jenis_surat == 'Intruksi')) {
			$this->db->from('skeluar');
		    $this->db->join('tb_sk_intruksi_transfer', 'skeluar.no = tb_sk_intruksi_transfer.no');
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

	function saveDatasuratkeluar($data=null,$data2=null,$jenissurat=null,$prihal=null)
	{
		$this->db->trans_begin();
		$data = $this->db->insert('skeluar', $data);

		if(($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan PT Kolektif') or 
			($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan Fee Bimker') or  
			($jenissurat == 'Pencairan' and $prihal == 'Surat Tidak ACC Pencairan PT Kolektif') or  
			($jenissurat == 'Pencairan' and $prihal == 'Surat Tidak ACC Pencairan Fee Bimker')){

			$data2 = $this->db->insert_batch('tb_sk_pencairan_fee', $data2);


		}elseif (($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan PT Kolektif') or 
			($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan Fee Bimker') or  
			($jenissurat == 'Pencairan' and $prihal != 'Surat Tidak ACC Pencairan PT Kolektif') or  
			($jenissurat == 'Pencairan' and $prihal != 'Surat Tidak ACC Pencairan Fee Bimker')) {

			$data2 = $this->db->insert('tb_sk_tidak_kuota', $data2);
			
		} elseif ($jenissurat == 'Peringatan') {
			$data2 = $this->db->insert('tb_sk_peringatan', $data2);
		} elseif ($jenissurat == 'Teguran') {
			$data2 = $this->db->insert('tb_sk_teguran', $data2);
		} elseif ($jenissurat == 'Pembayaran') {
			$data2 = $this->db->insert('tb_sk_pos_giro', $data2);
		} elseif ($jenissurat == 'Transfer') {
			$data2 = $this->db->insert_batch('tb_sk_transfer_mgmbiaya', $data2);
		} elseif ($jenissurat == 'Pengecekan') {
			$data2 = $this->db->insert('tb_sk_pengecekan', $data2);
		} elseif ($jenissurat == 'Intruksi') {
			$data2 = $this->db->insert('tb_sk_intruksi_transfer', $data2);
		}

		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        	return FALSE;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
        }
	}

	function saveDatasuratkeluar_sidak($data)
	{ 
		$this->db->trans_begin();
		
		$data = $this->db->insert('tb_sk_sidak', $data);

		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        	return FALSE;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
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

 	function updateDatasuratkeluar_sidak($data, $where)
 	{
 		$this->db->trans_begin();
 		$data = $this->db->update('tb_sk_sidak', $data, $where);
		
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        	return FALSE;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
        }
 	}

 	function updateDatasuratkeluar($data,$data2, $where,$jenissurat,$prihal)
 	{
 		$this->db->trans_begin();
 		$data = $this->db->update('skeluar', $data, $where);

 		if (($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan PT Kolektif') or 
			($jenissurat == 'Pencairan' and $prihal == 'Surat ACC Pencairan Fee Bimker') or  
			($jenissurat == 'Pencairan' and $prihal == 'Surat Tidak ACC Pencairan PT Kolektif') or  
			($jenissurat == 'Pencairan' and $prihal == 'Surat Tidak ACC Pencairan Fee Bimker')){

 			$data = $this->db->insert_batch('tb_sk_pencairan_fee', $data2);	

 		}elseif (($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan PT Kolektif') or 
			($jenissurat == 'Pencairan' and $prihal != 'Surat ACC Pencairan Fee Bimker') or  
			($jenissurat == 'Pencairan' and $prihal != 'Surat Tidak ACC Pencairan PT Kolektif') or  
			($jenissurat == 'Pencairan' and $prihal != 'Surat Tidak ACC Pencairan Fee Bimker')){

 			$data = $this->db->update('tb_sk_tidak_kuota', $data2, $where);	

 		} elseif ($jenissurat == "Peringatan") {
 			$data = $this->db->update('tb_sk_peringatan', $data2, $where);	
 		} elseif ($jenissurat == "Teguran") {
 			$data = $this->db->update('tb_sk_teguran', $data2, $where);	
 		} elseif ($jenissurat == "Pembayaran") {
 			$data = $this->db->update('tb_sk_pos_giro', $data2, $where);	
 		} elseif ($jenissurat == "Pengecekan") {
 			$data = $this->db->update('tb_sk_pengecekan', $data2, $where);
		} elseif ($jenissurat == "Transfer") {
 			$data = $this->db->insert_batch('tb_sk_transfer_mgmbiaya', $data2);
		} elseif ($jenissurat == "Intruksi") {
 			$data = $this->db->update('tb_sk_intruksi_transfer', $data2);
		}

 		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        	return FALSE;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
        }
 	}

 	function deleteDatasuratkeluar($jenis_surat,$where,$prihal=Null)
 	{
 		$this->db->trans_begin();
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
 		} elseif ($jenis_surat == 'Intruksi') {
 			$data = $this->db->delete('skeluar', $where);
			$data2 = $this->db->delete('tb_sk_intruksi_transfer', $where);
 		}

 		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        	return FALSE;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
        }
 	}
 
 	function deleteDatasuratkeluar_sidak($where3)
 	{
 		$this->db->trans_begin();

 		$data3 = $this->db->delete('tb_sk_sidak', $where3);

 		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        	return FALSE;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            return TRUE;
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
 	public function export($tbl_surat2,$tgl_awal,$tgl_akhir)
 	{
echo "mm ".$tbl_surat2."--".$tgl_awal."--".$tgl_akhir;

 		// $query = $this->db->query('SELECT * FROM skeluar JOIN '.$tbl_surat2.' ON skeluar.no = '.$tbl_surat2.'.no WHERE skeluar.tgl_SuratKeluar between "'.$tgl_awal.'" and "'.$tgl_akhir.'"');

 		$this->db->from('skeluar');
	    $this->db->join($tbl_surat2, 'skeluar.no = '.$tbl_surat2.'.no');
	  //   $this->db->where('skeluar.tgl_SuratKeluar between '.$tgl_awal.' and '.$tgl_akhir);
 		$this->db->where('skeluar.tgl_SuratKeluar between "'.$tgl_awal.'" and "'.$tgl_akhir.'"');
	    $query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
 	}
}
?>