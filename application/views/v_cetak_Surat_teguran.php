<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 0px 50px 0px 50px; }
body {
  font-size: 9pt;
  font-family: Calibri, Calibri, sans-serif;
  letter-spacing: 0.5px;
  word-spacing: normal;
  text-align: justify;
}
     #logo {
      margin-top: 0px;
      left: 0px;
      top: 10px;
      right: 0px;
      height: 135px;
      text-align: center; }
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
    /*#teguran{
        clear: left;
        }*/
     
     #teguran {
            /*display: inline-block;*/
            margin-left: 10px;
        }
      #sublist {
          left: -10px;
      }
      }  

</style>
  <title>SI Surat</title>
</head>
<body>
<div id="header">
	<div id="logo">
  	<img src="assets/img/header.png" width="770px">
	</div>
</div>
<div id="footer">
<!-- <img src="assets/img/footer.png" width="810px"> -->
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
  <table width="100%">
    <tr><td>No</td><td>:</td><td><?php echo $l['no'] .'/'. $l['no_surat'];?></td></tr>
    <tr><td>Hal</td><td>:</td><td width="100%"><?php echo $l['perihal'];?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $l['nama_tujuan'];?></b><br>
  <b><?php echo $l['tujuan'];?></b><br>
  <b>Di Tempat</b></p>
  <br>
  <p>Dengan Hormat,</p>
  
  <p style="text-indent: 20px;">Berdasarkan hasil pemeriksaan Bidang Keuangan, kami menemukan penyimpangan sebagai berikut :</p>
  <!-- <p align="justify">Hasil pemeriksaan <?php echo $l['pemeriksa'];?> terdapat penyimpangan yang dilakukan oleh <?php echo $l['bgn_tegur'];?> berupa :</p> -->
  <!-- <div id="teguran"> -->
	<ol>
    <?php $tbs = explode("^",$l['teguran']);
    foreach ($tbs as $t) { 
    	 $sub_tbs = explode("#",$t);
    ?>
    <li ><?php echo $sub_tbs[0]; 
  //  $y = count($sub_tbs) - 1;
    for($i=1; $i < count($sub_tbs) ;$i++){
    ?> <br>
		<?php echo"<ul type='square'><li>".$sub_tbs[$i]."</li>"; ?>
	
      	
      	<!-- <?php foreach ($sub_tbs as $sub_t) { print_r($sub_t)?>

		    <?php echo $sub_t[0]; ?>
		    <?php echo "-  ".$sub_t[1]; ?>
      	<?php }?>
 -->
    <?php echo "</ul>";} ?> </li> <?php }
    ?>
    </ol>
<!-- </div> -->
    <b><ul type='none'>
    <?php $tbs = explode("-",$l['penutup']);
    foreach ($tbs as $t) { ?>
      <li><?php echo $t; ?></li>
    <?php }
    ?>
      

    </ul></b>
    <p style="text-indent: 20px;">Oleh karena itu, kami memberikan surat teguran kepada Saudara agar tidak mengulangi kembali hal yang disebutkan di atas. </p>
    
    <p>Demikian disampaikan, atas kerjasama yang baik kami ucapkan terimakasih.</p>
  </div>
  
  <br><br>
   <div id="ttd">
     <table>
       <tr><td style="text-align: left;">Terimakasih,</td></tr>
       <tr><td>Bandung, <?php echo $bulan[0].' '.$infobulan.' '.$bulan[2] ;?></td></tr>
       <tr><td><br></td></tr>
       <tr><td><br></td></tr>
       <tr align="center"><td><b><u>Dra. Erna Veronika</u></b></td></tr>
       <tr align="center"><td><b>Manajer Keuangan</b></td></tr>
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
