    <section class="content-header">
      <h1>
        Data Surat Pencairan Fee
        <small>advanced tables</small>
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
                //print_r($lihat);
                foreach($lihat as $l) { 
                  $no = $l['no'];
                  $no_surat = $l['no_surat'];
                  $perihal = $l['perihal'];
                  $lampiran = $l['lampiran'];
                  $tujuan = $l['tujuan'];
                  $nama_tujuan = $l['nama_tujuan'];
                  $tgl_marketing = $l['tgl_marketing'];
                  $tgl_SuratKeluar = $l['tgl_SuratKeluar'];
                  $userid = $l['userid'];
                  $jenis_surat = $l['jenis_surat'];
                  $tembusan = $l['tembusan'];
                  }
                 if (!empty($lihat)){
                     ?>
				          <tr><td>No Surat</td> <td><?php echo $no.'/'. $no_surat;?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $perihal; ?></td> </tr>
                  <tr><td>Lampiran</td> <td><?= $lampiran; ?></td> </tr>
                  <tr><td>Nama Penerima</td> <td><?= $nama_tujuan; ?></td></tr>
                  <tr><td>Tujuan Penerima</td>  <td><?= $tujuan ?></td></tr>
                  <tr><td>Tanggal ACC Marketing</td>  <td><?= $tgl_marketing ?></td></tr>
                  <tr><td>Jenis Surat</td> <td><?= $jenis_surat ?></td></tr>
                  <tr><td>Tembusan</td> <td><?= $tembusan ?></td></tr>
                  <tr><td>Tanggal</td><td><?= $tgl_SuratKeluar; ?></td></tr>
                  <tr><td>User</td> <td><?= $userid;?></td></tr>
                  </tbody>
                </table>
            </div>
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped" style="border: 1px; text-align: center;">
                  <tr>
                    <th style="width: 2%; text-align: center;" rowspan="2">No</th>
                    <th style="width: 9%; text-align: center;" rowspan="2">Sekolah</th>
                    <th style="width: 3%; text-align: center;" rowspan="2">MOU</th>
                    <th style="width: 3%; text-align: center;" rowspan="2">Program</th>
                    <th style="width: 7%; text-align: center;" rowspan="2">Jumlah Siswa yg di Ajukan</th>
                    <th style="width: 3%; text-align: center;" colspan="2">Jumlah Siswa</th>
                    <th style="width: 10%; text-align: center;" rowspan="2">Fee Per Siswa (Rp)</th>
                    <th style="width: 10%; text-align: center;" rowspan="2">Jumlah yg di Setujui (Rp)</th>
                    <th style="width: 20%; text-align: center;" rowspan="2">Keterangan</th>
                  </tr>
                  <tr>
                    <th style="width: 3%; text-align: center;" >ACC</th>
                    <th style="width: 5%; text-align: center;" >Tidak Acc</th>
                  </tr>
                  <?php $tot=0;$i=1; foreach($lihat as $l) { $tot += $l['jml_disetujui'];?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $l['sekolah'];?></td>
                    <td><?php echo $l['mou'];?></td>
                    <td><?php echo $l['program'];?></td>
                    <td><?php echo $l['jml_siswa'];?></td>
                    <td><?php echo $l['acc'];?></td>
                    <td><?php echo $l['tdk_acc'];?></td>
                    <td><?php echo number_format($l['fee_siswa']);?></td>
                    <td><?php echo number_format($l['jml_disetujui']);?></td>
                    <td><?php echo $l['ket'];?></td>
                  </tr>
                  <?php $i++; } }?>
                 <tr class="total"><td colspan="7"><p></p></td><td>Total</td><td>Rp. <?php echo number_format($tot);?></td><td><p></p></td></tr>
                </table>
 
              <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

