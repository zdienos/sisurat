<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 20px 50px 0px 50px; }
body{
  font-size: 10pt;
}
      #logo {
      margin-top: 0px;
      top: 0px;
      left: 0px;
      width: 50px;
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
        display: inline-block;}
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
    table.data .total tr{
      background-color: grey; 
    }

</style>
  <title>SI Surat</title>
</head>
<body>
<div id="header">
  <div id="logo">
    <img src="assets/img/logo-copy.png" width="200px">
  </div>
  <div id="memo">
    <img src="assets/img/memo.png" width="200px">
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
  $no = $l['no'];
  $no_surat = $l['no_surat'];
  $perihal = $l['perihal'];
  $jenis_pencairan = $l['jenis_pencairan'];
  $tujuan = $l['tujuan'];
  $nama_tujuan = $l['nama_tujuan'];
  }?>
  <table>
    <tr><td>No Surat</td><td>:</td><td><?php echo $no .'/'. $no_surat;?></td></tr>
    <tr><td>Perihal</td><td>:</td><td><?php echo $perihal.' '.$jenis_pencairan;?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $nama_tujuan;?></b><br>
  <b><?php echo $tujuan;?></b><br>
  di Tempat</p>
  
  <p>Dengan Hormat,</p>
  
  <p>Bersama ini kami mengajukan permohonan transfer pencairan mgm dan pengembalian biaya, dengan rincian sbb :</p>
<?php 
$tot_jmlor_mgm=0;
$tot_jmlsis_mgm=0;
$tot_jmlor_biaya=0;
$tot_jmlsis_biaya=0;
$tot_order=0;
$tot_siswa=0;

if ($jenis_pencairan == "mgm"){ ?>
  <table border="1px" style="position: center;" class="data">
    <tr>
     <th rowspan="2">Tanggal</th>
      <th rowspan="2">Bank</th>
      <th colspan="2">Pencairan MGM</th>
    </tr>
    <tr>
      <th >Jumlah Order (Rp)</th>
      <th>Jumlah Siswa</th>
    </tr>
    <?php 
    foreach($cetak as $l) { 
      $tot_jmlor_mgm += $l['jml_order_mgm']; 
      $tot_jmlsis_mgm += $l['jml_siswa_mgm']; 
      ?>
    <tr>
      <td><?php echo $l['tgl_pencairan'];?></td>
      <td><?php echo $l['bank'];?></td>
      <td><?php echo number_format($l['jml_order_mgm']);?></td>
      <td><?php echo $l['jml_siswa_mgm'];?></td>
    </tr>
    <?php } ?>
   <tr><td colspan="2">Total</td><td>Rp. <?php echo number_format($tot_jmlor_mgm);?></td><td><?php echo $tot_jmlsis_mgm;?></td></tr>
  </table>

<?php } elseif ($jenis_pencairan == "pengembalian biaya") { ?>
   <table border="1px" style="position: center;" class="data">
    <tr>
      <th rowspan="2">Tanggal</th>
      <th rowspan="2">Bank</th>
      <th colspan="2">Pengembalian Biaya</th>
    </tr>
    <tr>
      <th >Jumlah Order (Rp)</th>
      <th >Jumlah Siswa</th>
    </tr>
    <?php 
    foreach($cetak as $l) { 
      $tot_jmlor_biaya += $l['jml_order_biaya']; 
      $tot_jmlsis_biaya += $l['jml_siswa_biaya']; 
      ?>
    <tr>
      <td><?php echo $l['tgl_pencairan'];?></td>
      <td><?php echo $l['bank'];?></td>
      <td><?php echo number_format($l['jml_order_biaya']);?></td>
      <td><?php echo $l['jml_siswa_biaya'];?></td>
    </tr>
    <?php  } ?>
   <tr><td colspan="2">Total</td><td>Rp. <?php echo number_format($tot_jmlor_biaya);?></td><td><?php echo $tot_jmlsis_biaya;?></td></tr>
  </table>

<?php } elseif ($jenis_pencairan == "mgm dan pengembalian biaya") { ?>
     <table border="1px" style="position: center;" class="data">
    <tr>
      <th style="width: 7%" rowspan="2">Tanggal</th>
      <th style="width: 10%" rowspan="2">Bank</th>
      <th style="width: 10%" colspan="2">Pencairan MGM</th>
      <th style="width: 10%" colspan="2">Pengembalian Biaya</th>
      <th style="width: 7%" rowspan="2">Total Order (Rp)</th>
      <th style="width: 10%" rowspan="2">Total Jumlah Siswa</th>
    </tr>
    <tr>
      <th style="width: 5%" >Jumlah Order (Rp)</th>
      <th style="width: 5%" >Jumlah Siswa</th>
      <th style="width: 5%" >Jumlah Order (Rp)</th>
      <th style="width: 5%" >Jumlah Siswa</th>
    </tr>
    <?php 
    foreach($cetak as $l) { 
      $tot_jmlor_mgm += $l['jml_order_mgm']; 
      $tot_jmlsis_mgm += $l['jml_siswa_mgm']; 
      $tot_jmlor_biaya += $l['jml_order_biaya']; 
      $tot_jmlsis_biaya += $l['jml_siswa_biaya']; 
      $tot_order += $l['tot_order'];
      $tot_siswa += $l['tot_siswa'];
      ?>
    <tr>
      <td><?php echo $l['tgl_pencairan'];?></td>
      <td><?php echo $l['bank'];?></td>
      <td><?php echo number_format($l['jml_order_mgm']);?></td>
      <td><?php echo $l['jml_siswa_mgm'];?></td>
      <td><?php echo number_format($l['jml_order_biaya']);?></td>
      <td><?php echo $l['jml_siswa_biaya'];?></td>
      <td><?php echo number_format($l['tot_order']);?></td>
      <td><?php echo $l['tot_siswa'];?></td>
    </tr>
    <?php  } ?>
   <tr>
    <td colspan="2">Total</td>
    <td>Rp. <?php echo number_format($tot_jmlor_mgm);?></td>
    <td><?php echo $tot_jmlsis_mgm;?></td>
    <td>Rp. <?php echo number_format($tot_jmlor_biaya);?></td>
    <td><?php echo $tot_jmlsis_biaya;?></td>
    <td>Rp. <?php echo number_format($tot_order);?></td>
    <td><?php echo $tot_siswa;?></td></tr>
  </table>
<?php }?>
  
  <p> Demikian hal ini disampaikan. Atas Kerjasama yang baik kami ucapkan terimakasih.</p>
    <div id="ttd">
      <table>
        <tr><td style="text-align: left;">Terimakasih,</td></tr>
        <tr><td>Bandung,<?php echo $bulan[0].' '.$infobulan.' '.$bulan[2] ;?></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><b><u><?php echo $nama_lengkap?></u></b></td></tr>
        <tr><td><b><?php echo $jabatan?></b></td></tr>
      </table>
    </div>
  
</body></html>
