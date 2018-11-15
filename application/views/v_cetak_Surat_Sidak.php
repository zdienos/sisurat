<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 70px 70px 0px 70px; }
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
  $tujuan = explode("Kepala", $l['tujuan_penerima']);
  $user = explode("-", $l['userid']);
  
  ?>
<br><br>
  <table>
    <tr><td>No</td><td>:</td><td><?php echo $l['no'] .'/'. $l['no_surat'];?></td></tr>
    <tr><td>Perihal</td><td>:</td><td><?php echo $l['perihal'];?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $l['nama_penerima'];?></b><br>
  <b><?php echo $l['tujuan_penerima'];?></b><br>
  <b>Di Tempat</b></p><br>
  
  <p>Dengan Hormat,</p>
  
  <p align="justify"> Dengan ini diinformasikan bahwa pada tanggal <?php echo date('d F Y',strtotime($l['tgl_sidak'])) ?> akan dilakukan pemeriksaan <?php echo $l['tugas_sidak'];?> di <?php echo $tujuan[1];?> oleh Petugas dari Pusat.</p>
  <p>Segala hal yang berhubungan dengan kegiatan tersebut harap dibantu.</p>
  <p>Demikian hal ini disampaikan, atas kerjasama yang baik diucapkan terimakasih.
  <br><br><br>
  <div id="ttd">
     <table>
       <tr><td>Bandung,<?php echo $bulan[0].' '.$infobulan.' '.$bulan[2] ;?></td></tr>
       <tr><td><b><i>GANESHA OPERATION</i></b></td></tr>
       <tr><td><br></td></tr>
       <tr><td><br></td></tr>
       <tr><td><br></td></tr>
       <tr><td><u>Dra. Erna Veronika</u></td></tr>
       <tr><td>Manajer Keuangan</td></tr>
     </table>
   </div>
   <br><br><br><br><br><br><br><br>
   <div id="tbs">
    <p>Tembusan :</p>
    <p><ul>
    <?php $tbs = explode(",",$l['tembusan']);
    foreach ($tbs as $t) { ?>
      <li><?php echo $t; ?></li>
    <?php }
    ?>
      

    </ul>
    </p>
  </div>

 <div style="page-break-after: always; margin-t"></div>

 <p><h1 style="text-align: center;"><b>SURAT TUGAS</b></h1></p>
 <hr>
 <p>Yang bertanda tangan di bawah ini :</p>
 <dd><table>
   <tr><td>Nama</td><td>:</td><td>Dra. Erna Veronika</td></tr>
   <tr><td>Jabatan</td><td>:</td><td>Manajer Keuangan</td></tr>
 </table></dd>
  <p>Menugaskan Kepada :</p>
  <ol>
    <ol>
  <table>
  <?php 
  $nama_petugas = explode(",", $l['petugas_sidak']);
  $no=1;
  foreach ($nama_petugas as $nama) {
    $n = explode("-", $nama);
  ?>
    
      <tr>
        <td><?= $no.'.' ?></td>
        <td><?= $n[0]?></td>
        <td><dd><?= $n[1];?></dd></td>
      </tr>
  <?php  $no++;} ?>
    </table>
  </ol>
  </ol>
<br><br>
  <p> Untuk melakukan pemeriksaan <?= $l['tugas_sidak']?> di <b><i><?= $tujuan[1];?></i></b> pada tanggal <?php echo date('d F Y',strtotime($l['tgl_sidak'])) ?>.</p>
  <p> Demikian surat jalan ini dibuat untuk dilaksanakan sebaik-baiknya.</p>

<br><br><br>

<div id="ttd">
     <table>
       <tr><td>Bandung,<?php echo $bulan[0].' '.$infobulan.' '.$bulan[2] ;?></td></tr>
       <tr><td><b><i>GANESHA OPERATION</i></b></td></tr>
       <tr><td><br></td></tr>
       <tr><td><br></td></tr>
       <tr><td><br></td></tr>
       <tr><td><u>Dra. Erna Veronika</u></td></tr>
       <tr><td>Manajer Keuangan</td></tr>
     </table>
   </div>
   <br><br><br><br><br><br><br><br>
   <div id="tbs">
    <p>Tembusan :</p>
    <p><ul>
    <?php $tbs = explode(",",$l['tembusan']);
    foreach ($tbs as $t) { ?>
      <li><?php echo $t; ?></li>
    <?php }
    ?>
      

    </ul>

<?php }?>

  
</body></html>
