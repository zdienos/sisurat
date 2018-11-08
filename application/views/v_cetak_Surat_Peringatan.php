<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 15px 50px 0px 50px; }
body {
  font-size: 11pt;
}
      #logo {
      margin-top: 0px;
      left: 0px;
      top: 10px;
      right: 0px;
      height: 135px;
      text-align: center; }
      #ttd {
        margin-right: 60px;
        float: right;
        right: 0; }
      #tbs{
      	clear: left;
       
        top: 100px;}

</style>
  <title>SI Surat</title>
</head>
<body>
<div id="header">
	<div id="logo">
  	<img src="assets/img/header.png" width="770px">
	</div>
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
  $user = explode("-", $l['userid']);
  ?>
<br><br>
  <table>
    <tr><td>No</td><td>:</td><td><?php echo $l['no'] .'/'. $l['no_surat'];?></td></tr>
    <tr><td>Perihal</td><td>:</td><td><?php echo $l['perihal'];?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $l['nama_tujuan'];?></b><br>
  <b><?php echo $l['tujuan'];?></b><br>
  <b><?php echo $l['loktujuan'];?></b><br>
  di Tempat</p><br>
  
  <p>Dengan Hormat,</p>
  
  <p align="justify" style="word-wrap: break-word;min-width: 700px;max-width: 700px"><?php echo $l['kesalahan'];?>, Maka kami berikan <b><?php echo $l['perihal'];?> <?php echo $l['spke'];?></b>.</p>
  <p>Kami minta Saudara tidak mengulangi perbuatan tersebut dan dapat bekerja dengan lebih bertanggung jawab.</p><br>
  <p>Demikian disampaikan, atas kerjasama yang baik kami ucapkan terimakasih.</p>
  <br>
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
   <br><br><br><br><br><br><br><br>
   <div id="tbs">
    <p>Tembusan :</p>
    <p><ol>
    <?php $tbs = explode(",",$l['tembusan']);
    foreach ($tbs as $t) { ?>
      <li><?php echo $t; ?></li>
    <?php }
    ?>
      

    </ol>
    </p>
  </div>
 
  
  

<?php }?>

  
</body></html>
