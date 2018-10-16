<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 20px 50px 0px 50px; }
body {
  font-size: 12pt;
}
      #logo {
      margin-top: 0px;
      top: 0px;
      left: 0px;
      width: 50px;
      position: relative; }
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

</style>
  <title>SI Surat</title>
</head>
<body>
<div id="header">
	<div id="logo">
  	<img src="assets/img/logo-copy.png" width="200px">
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




foreach($cetak as $l) { ?>
<br><br>
  <table>
    <tr><td>No</td><td>:</td><td><?php echo $l['no'] .'/'. $l['no_surat'];?></td></tr>
    <tr><td>Hal</td><td>:</td><td><?php echo $l['perihal'];?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $l['tujuan'];?></b><br>
  <b><?php echo $l['nama_tujuan'];?></b><br>
  di Tempat</p>
  
  <p>Dengan Hormat,</p>
  
  <p align="justify">Harap memberikan Surat Peringatan <?php echo $l['spke'];?> Kepada :</p>
  <p><dd>Nama : <?php echo $l['namasp'];?></dd></p>
  <p><dd>Jabatan : <?php echo $l['jabatansp'];?></dd></p>
  <p>Atas Kesalahan :</p>
  <p><dd>- <?php echo $l['kesalahan'];?></dd></p>
  <p>Tembusan Surat peringatan harus sudah dikirim tanggal <?php echo $l['tgl_tembusan'];?> sebelum pukul <?php echo $l['jam_tembusan'];?> WIB Kepada :</p>
  <div id="tbs">
    <p><ol>
    <?php $tbs = explode(",",$l['tembusan']);
    foreach ($tbs as $t) { ?>
      <li><?php echo $t; ?></li>
    <?php }
    ?>
      

    </ol>
    </p>
  </div>
  <p>Demikian hal ini disampaikan</p>
  <br><br>
   <div id="ttd">
     <table>
       <tr><td style="text-align: left;">Terimakasih,</td></tr>
       <tr><td>Bandung,<?php echo $bulan[0].' '.$infobulan.' '.$bulan[2] ;?></td></tr>
       <tr><td><br></td></tr>
       <tr><td><br></td></tr>
       <tr><td><b><u>Dra. Erna Veronika</u></b></td></tr>
       <tr><td><b>Manajer Keuangan</b></td></tr>
     </table>
   </div>
 
  
  

<?php }?>

  
</body></html>
