    <section class="content-header">
      <h1><span class="fa fa-eye"></span>
        Data Surat Transfer Pencairan
        <small>Selamat Bekerja!</small>
      </h1>
    </section>
<section class="content">
      <div class="row">
      <div class="col-xs-12">
      <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tbody>
                <?php 
                $tot_jmlor_mgm=0;
                $tot_jmlsis_mgm=0;
                $tot_jmlor_biaya=0;
                $tot_jmlsis_biaya=0;
                $tot_order=0;
                $tot_siswa=0;

                foreach($lihat as $l) { 
                  $no = $l['no'];
                  $no_surat = $l['no_surat'];
                  $perihal = $l['perihal'];
                  $tujuan = $l['tujuan'];
                  $nama_tujuan = $l['nama_tujuan'];
                  $jenis_pencairan = $l['jenis_pencairan'];
                  $tgl_pencairan = $l['tgl_pencairan'];
                  $tgl_SuratKeluar = $l['tgl_SuratKeluar'];
                  $userid = $l['userid'];
                  }
                 if (!empty($lihat)){
                     ?>
				          <tr><td>No Surat</td> <td><?php echo $no.'/'. $no_surat;?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $perihal; ?></td> </tr>
                  <tr><td>Nama Penerima</td> <td><?= $nama_tujuan; ?></td></tr>
                  <tr><td>Tujuan Penerima</td>  <td><?= $tujuan ?></td></tr>
                  <tr><td>Jenis Pencairan</td> <td><?= $jenis_pencairan ?></td></tr>
                  <tr><td>Tanggal Buat Surat</td><td><?= $tgl_SuratKeluar; ?></td></tr>
                  <tr><td>Yg Membuat Surat</td> <td><?= $userid;?></td></tr>
                  </tbody>
                </table>
            </div>
            <div class="box-body">
               <?php if ($jenis_pencairan == "mgm"){ ?>
                <table border="1px" style="position: center;" class="table table-bordered table-striped">
                  <tr>
                   <th rowspan="2" style="text-align: center;">Tanggal</th>
                    <th rowspan="2" style="text-align: center;">Bank</th>
                    <th colspan="2" style="text-align: center;">Pencairan MGM</th>
                  </tr>
                  <tr>
                    <th >Jumlah Order (Rp)</th>
                    <th>Jumlah Siswa</th>
                  </tr>
                  <?php 
                  foreach($lihat as $l) { 
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
                 <tr><td colspan="2" style="text-align: right;">Total</td><td>Rp. <?php echo number_format($tot_jmlor_mgm);?></td><td><?php echo $tot_jmlsis_mgm;?></td></tr>
                </table>

              <?php } elseif ($jenis_pencairan == "pengembalian biaya") { ?>
                 <table border="1px" style="position: center;" class="table table-bordered table-striped">
                  <tr>
                    <th rowspan="2" style="text-align: center;">Tanggal</th>
                    <th rowspan="2" style="text-align: center;">Bank</th>
                    <th colspan="2" style="text-align: center;">Pengembalian Biaya</th>
                  </tr>
                  <tr>
                    <th >Jumlah Order (Rp)</th>
                    <th >Jumlah Siswa</th>
                  </tr>
                  <?php 
                  foreach($lihat as $l) { 
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
                 <tr><td colspan="2" style="text-align: right;">Total</td><td>Rp. <?php echo number_format($tot_jmlor_biaya);?></td><td><?php echo $tot_jmlsis_biaya;?></td></tr>
                </table>

              <?php } elseif ($jenis_pencairan == "mgm dan pengembalian biaya") { ?>
                   <table border="1px" style="position: center;" class="table table-bordered table-striped">
                  <tr>
                    <th style="width: 7%" rowspan="2">Tanggal</th>
                    <th rowspan="2">Bank</th>
                    <th colspan="2">Pencairan MGM</th>
                    <th colspan="2">Pengembalian Biaya</th>
                    <th rowspan="2">Total Order (Rp)</th>
                    <th rowspan="2">Total Jumlah Siswa</th>
                  </tr>
                  <tr>
                    <th  >Jumlah Order (Rp)</th>
                    <th  >Jumlah Siswa</th>
                    <th  >Jumlah Order (Rp)</th>
                    <th  >Jumlah Siswa</th>
                  </tr>
                  <?php 
                  foreach($lihat as $l) { 
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
                  <td colspan="2" style="text-align: right"><b>Total</b></td>
                  <td>Rp. <?php echo number_format($tot_jmlor_mgm);?></td>
                  <td><?php echo $tot_jmlsis_mgm;?></td>
                  <td>Rp. <?php echo number_format($tot_jmlor_biaya);?></td>
                  <td><?php echo $tot_jmlsis_biaya;?></td>
                  <td>Rp. <?php echo number_format($tot_order);?></td>
                  <td><?php echo $tot_siswa;?></td></tr>
                </table>
              <?php } }?>
  
                <br>
              <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary"><i class="fa fa-mail-reply"></i>Kembali</a>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

