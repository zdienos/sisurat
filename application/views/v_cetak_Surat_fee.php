<!DOCTYPE html>
<html>
<style type="text/css">
@page {margin: 20px 50px 0px 50px; }
body{
  font-size: 9pt;
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
<!-- <div id="footer">
<img src="assets/img/footer.png" width="800px">
</div> -->
<?php

$date =date('d-m-Y');
$thn = explode("-", $date);
$thn2 = (int)$thn[2]+1;
$thn3 = (int)$thn[2]-1;
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
$bln = (int)$bulan[1];

foreach($cetak as $l) { 
  $no = $l['no'];
  $no_surat = $l['no_surat'];
  $perihal = $l['perihal'];
  $tidak_acc = explode(" ", $perihal);
  $lampiran = $l['lampiran'];
  $tujuan = $l['tujuan'];
  $nama_tujuan = $l['nama_tujuan'];
  $kacab = explode(" ", $tujuan);
  $tgl_marketing = $l['tgl_marketing'];
  $perihal = $l['perihal'];
  $tembusan = $l['tembusan'];
  $user = explode("-", $l['userid']);
  
  }?>
  <table>
    <tr><td>No Surat</td><td>:</td><td><?php echo $no .'/'. $no_surat;?></td></tr>
    <tr><td>Perihal</td><td>:</td><td><?php echo $perihal;?> <?php
    if ($bln <= 6) {
      echo ' '.'TP.'.$thn3.'/'.$thn[2];
    } else {
      echo ' '.'TP.'.$thn[2].'/'.$thn2;
    } 
     ?>  
    </td></tr>
    <tr><td>Lampiran</td><td>:</td><td><?php echo $lampiran;?></td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b><?php echo $nama_tujuan;?></b><br>
  <b><?php echo $tujuan;?></b><br>
  di Tempat</p>
  
  <p>Dengan Hormat,</p>
  
  <p> Menindaklanjuti memo dari Bagian Marketing tanggal <?php echo date('d F Y',strtotime($tgl_marketing));?> perihal <?php echo $perihal;?> dengan ini diinformasikan berdasarkan pengecekan Bagian Keuangan, adalah sebagai berikut:</p>

  <table border="1px" style="page-break-inside: auto;" class="data"  >
    <thead>
    <tr>
      <th style="width: 2%" rowspan="2">No</th>
      <th style="width: 10%" rowspan="2">Sekolah</th>
      <th style="width: 5%" rowspan="2">MOU</th>
      <th style="width: 5%" rowspan="2">Program</th>
      <th style="width: 5%" rowspan="2">Jumlah Siswa yg di Ajukan</th>
      <th style="width: 3%" colspan="2">Jumlah Siswa</th>
      <th style="width: 10%" rowspan="2">Fee Per Siswa (Rp)</th>
      <th style="width: 15%" rowspan="2">Jumlah yg di Setujui (Rp)</th>
      <th style="width: 35%" rowspan="2">Keterangan</th>
    </tr>
    <tr>
      <th style="width: 3%" >ACC</th>
      <th style="width: 3%" >Tidak Acc</th>
    </tr>
    </thead>
    <?php $i=1; $tot=0; $jml_sis=0;$acc=0;$tdk=0; 
    foreach($cetak as $l) { 
      $tot += $l['jml_disetujui']; 
      $jml_sis += $l['jml_siswa']; 
      $acc += $l['acc']; 
      $tdk += $l['tdk_acc']; ?>
    <tr>

      <td><?php echo $i;?></td>
      <td><?php echo $l['sekolah'];?></td>
      <td><?php echo $l['mou'];?></td>
      <td><?php echo $l['program'];?></td>
      <td><?php echo $l['jml_siswa'];?></td>
      <td><?php echo $l['acc'];?></td>
      <td><?php echo $l['tdk_acc'];?></td>
      <td>Rp. <?php echo number_format($l['fee_siswa']);?></td>
      <td>Rp. <?php echo number_format($l['jml_disetujui']);?></td>
      <td style="text-align: left;"<?php echo $l['ket'];?></td>
    </tr>
    <?php $i++; } ?>
   <tr class="total"><td colspan="4"><p></p></td><td><?php echo number_format($jml_sis);?></td><td><?php echo number_format($acc);?></td><td><?php echo number_format($tdk);?></td><td>Total</td><td>Rp. <?php echo number_format($tot);?></td><td><p></p></td></tr>
  </table>
 
  <p> Demikian hal ini disampaikan. <?php if($tidak_acc[1] != "Tidak"){?>Untuk pencairan dana harap diajukan ke Bidang Akuntansi. <?php }?> Atas Kerjasama nya kami ucapkan terimakasih.</p>
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
       <?php if(($kacab[1] == "Cabang") or ($kacab[1] == "Rayon") or ($kacab[2] == "Cabang")){ ?>
        <tr><td><b><u>Dra. Erna Veronika</u></b></td></tr>
        <tr><td><b>Manajer Keuangan</b></td></tr>
      <?php } else {?>
       <tr><td><b><u><?php echo $user[0]?></u></b></td></tr>
        <tr><td><b><?php echo $user[1]?></b></td></tr>
      <?php }?>
      </table>
    </div>
  <br>  <br>  <br>  <br>  <br> 
  <div id="tbs">
    <p>Tembusan:<br>
    <ul style="list-style-type: none;">
    <?php 
    $tbs = explode(",",$tembusan);
    foreach ($tbs as $t) {  ?>
      <li><?php echo "-  ".$t; ?></li>
    <?php 
    }
    ?>
    </ul>
    </p>
  </div>
     <p style="text-align: center; margin-top: 0px;">Dikirim Via Email</p>

  
</body></html>
