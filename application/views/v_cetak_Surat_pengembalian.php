<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 20px 50px 0px 50px; }
body {
  font-size: 11pt;
}
      #logo {
      margin-top: 0px;
      top: 0px;
      left: 0px;
      width: 80px;
      position: absolute; }
      #memo {
      left: 0px;
      top: 0px;
      right: 0px;
      width: 100%;
      text-align: right;
      position: relative;
      }
      #footer{
      position: fixed;
      left: 0px;
      bottom: 69px;
      right: 0px;
      height: 50px;
      text-align: center;	
      }
      #ttd {
        float: right;
        right: 0; }
      #tbs{
      	clear: left;
        display: inline-block;
        top: 250px;}
    table.data {
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto; }
    table.data th {
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
      background-color: grey; }
    table.data td {
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
      text-align: center; }

</style>
  <title>SI Surat</title>
</head>
<body>
<div id="header">
	<div id="logo">
  	<img src="assets/img/logo-copy.png" width="200px">
	</div>
	<div id="memo">
  	<img src="assets/img/memo.png" width="150px">
	</div>
</div>
<div id="footer">
<img src="assets/img/footer.png" width="800px">
</div>
<?php
$date =date('d-m-Y');
$bulan = explode("-", $date);
		if ($bulan[1] == '01') {
			$infobulan = "Januari";
		} elseif ($bulan[1] == '02') {
			$infobulan = "Februari";
		} elseif ($bulan[1] == '03') {
			$infobulan = "Maret";
		} elseif ($bulan[1] == '04') {
			$infobulan = "April";
		} elseif ($bulan[1] == '05') {
			$infobulan = "Mei";
		} elseif ($bulan[1] == '06') {
			$infobulan = "Juni";
		} elseif ($bulan[1] == '07') {
			$infobulan = "Juli";
		} elseif ($bulan[1] == '08') {
			$infobulan = "Agustus";
		} elseif ($bulan[1] == '09') {
			$infobulan = "September";
		} elseif ($bulan[1] == '10') {
			$infobulan = "Oktober";
		} elseif ($bulan[1] == '11') {
			$infobulan = "November";
		} elseif ($bulan[1] == '12') {
			$infobulan = "Desember";
		} else {
			$infobulan = "-";
		}

foreach($cetak as $l) { 
  $tujuan = $l['tujuan'];
  $nama_tujuan = $l['nama_tujuan'];
  $kacab = explode(" ", $tujuan);
  $user = explode("-", $l['userid']);
  
  ?>
  <table style="margin-top: 30px;">
    <tr><td>No</td><td>:</td><td><?php echo $l['no'] .'/'. $l['no_surat'];?></td></tr>
    <tr><td>Hal</td><td>:</td><td><?php echo $l['perihal'];?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $l['nama_tujuan'];?></b><br>
  <b><?php echo $l['tujuan'];?></b><br>
  di Tempat</p>
  
  <p>Dengan Hormat,</p>
  
  <p align="justify"> Menindaklanjuti memo dari <?php echo $l['tindaklanjut'];?> tanggal <?php echo date('d F Y',strtotime($l['tgl_marketing'])) ?> perihal <?php echo $l['perihal'];?> Unit <?php echo $l['unit'];?> ,berdasarkan Pengecekan bagian keuangan terhadap pembayaran biaya bimbel siswa berikut berhak untuk menerima pengembalian, yaitu:</p>
  <br>
  <div id="conten">
  <table class="data" style="page-break-after: auto" >
    <thead>
      <tr>
        <th style="width: 25%"><center>Nama Siswa</center></th>
        <th style="width: 25%"><center>Kelas</center></th>
        <th style="width: 25%"><center>Jumlah Pengembalian yang disetujui</center></th>
        <th style="width: 25%"><center>No. Rekening Pengembalian</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><center><?php echo $l['nama_siswa'];?></center></td>
        <td><center><?php echo $l['kelas'];?></center></td>
        <td><center>Rp.<?php echo number_format($l['jumlahbayar']);?></center></td>
        <td><center><?php echo $l['pengembaliannorek'];?></center></td>
      </tr>
    </tbody>
  </table>
  </div>

  <p>Demikian hal ini disampaikan, pengembalian biaya akan di transfer dari Bidang Keuangan Bandung. Atas Kerjasamanya yang baik kami ucapkan terimakasih.</p>
  <?php 
   if(($kacab[1] == "Cabang") or ($kacab[1] == "Rayon") or ($kacab[2] == "Cabang")){ ?>
  <?php  }  else {   ?>
     <table>
        <tr><td style="text-align: left;">Mengetahui,</td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><b><u>Dra. Erna Veronika</u></b></td></tr>
        <tr><td><b>Manajer Keuangan</b></td></tr>
      </table>
  <?php  } ?>
    <div id="ttd">
      <table>
        <tr><td style="text-align: left;">Terimakasih,</td></tr>
        <tr><td>Bandung,<?php echo $bulan[0].' '.$infobulan.' '.$bulan[2] ;?></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
       <?php if(($kacab[1] == "Cabang") or ($kacab[1] == "Rayon") or ($kacab[3] == "Cabang")){ ?>
        <tr><td><b><u>Dra. Erna Veronika</u></b></td></tr>
        <tr><td><b>Manajer Keuangan</b></td></tr>
      <?php } else {?>
       <tr><td><b><u><?php echo $user[0]?></u></b></td></tr>
        <tr><td><b><?php echo $user[1]?></b></td></tr>
      <?php }?>
      </table>
    </div>
 
  <br>  <br>  <br>  <br>  <br>  <br>  <br>  
  <div id="tbs">
    <table>
    <tr><td><dd>Tembusan:</dd></td></tr>
    <tr><td>
    <ul style="list-style-type: none;">
    <?php $tbs = explode(",",$l['tembusan']);
    foreach ($tbs as $t) { ?>
    	<li><?php echo "-  ".$t; ?></li>
    <?php }
    ?>
    	

    </ul>
    </td></tr>
    </table>
     <p style="text-align: center;">Dikirim Via Email</p>
  </div>

<?php }?>
  
</body>
</html>
