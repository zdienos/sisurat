<!DOCTYPE html>
<html>
<head>
<style type="text/css">
      #logo {
      margin-top: 30px;
      top: 0px;
      left: 0px;
      width: 50px; }

      #body{
        margin-left: 30px;
      }

      #ttd {
         position: absolute;
         right: 0; }
      #tbs{
        position: relative;
        display: inline-block;
        top: 170px;
    }
</style>
  <title>SI Surat</title>
</head>
<body>
<div id="logo">
  <img src="assets/img/logo-copy.png" width="100px">
</div>
<div id="body">
  <table>
    <tr><td>No</td><td>:</td><td>@no</td></tr>
    <tr><td>Hal</td><td>:</td><td>@hal</td></tr>
  </table>
  <p>Kepada Yth,<br>
  <b>@nama_tujuan</b><br>
  <b>@tujuan</b><br>
  di Tempat</p>
  
  <br>
  <p>Dengan Hormat,</p>
  <br>

  <p> Menindaklanjuti memo dari bagian marketing pusat tanggal @tgl_marketing perihal Memo ACC Pengembalian biaya karena Pindah Program, berdasarkan Pengecekan bagian keuangan terhadap pembayaran biaya bimbel siswa berikut berhak untuk menerima pengembalian, yaitu:</p>
  <br>

  <table border="1">
    <tr>
    <th>Nama Siswa</th>
    <th>Kelas</th>
    <th>Jumlah Bayar + PT </th>
    <th>No. Rekening Pengembalian</th>
    </tr>
    <tr>
    <td>@nama_siswa</td>
    <td>@kelas</td>
    <td>@jumlah bayar</td>
    <td>@norek</td>
    </tr>
  </table>
  <br>

  <p> Demikian hal ini disampaikan, pengembalian biaya akan di transfer dari Bidang Keuangan Bandung. Atas Kerjasamanya yang baik kami ucapkan terimakasih.</p>
    <div id="ttd">
      <table>
        <tr><td style="text-align: left;">Terimakasih,</td></tr>
        <tr><td>Bandung,@date_now</td></tr>
        <tr><td>&nbsp</td></tr>
        <tr><td>&nbsp</td></tr>
        <tr><td>&nbsp</td></tr>
        <tr><td><b><u>Dra. Erna Veronika</u></b></td></tr>
        <tr><td><b>Manajer Keuangan</b></td></tr>
      </table>
    </div>
  <br>

  <div id="tbs">
    <p>Tembusan:
    @foreach explode tembusan
    </p>
  </div>

 <p style="text-align: center; margin-top:200px;">Dikirim Via Email</p>
  
</body>
</html>