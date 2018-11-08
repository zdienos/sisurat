    <section class="content-header">
      <h1><span class="fa fa-eye"></span>
        Data Surat Intruksi Transfer
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
                 if (!empty($lihat)){
                    foreach($lihat as $srt){ ?>
				  <tr><td>No Surat</td> <td><?php echo $srt['no'] .'/'. $srt['no_surat'];?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $srt['perihal']; ?></td> </tr>
                  <tr><td>Nama Tujuan</td> <td><?= $srt['nama_tujuan']; ?></td></tr>
                  <tr><td>Tujuan</td>  <td><?= $srt['tujuan'] ?></td></tr>
                  <tr><td>Jenis Surat</td> <td><?= $srt['jenis_surat'] ?></td></tr>
                  <tr><td>Cabang - kota - Unit</td><td><?= $srt['ckuitf']; ?></td></tr>
                  <tr><td>Pembayaran dari Siswa</td><td><?= $srt['pembayaransiswa']; ?></td></tr>
                  <tr><td>Kuitansi yang Di Setor</td><td><?= $srt['kuitansisetor']; ?></td></tr>
                  <tr><td>Tanggal laporan Pembayaran</td><td><?= $srt['tgl_lappem']; ?></td></tr>
                  <tr><td>No Kuitansi</td><td><?= $srt['nokuitansi']; ?></td></tr>
                  <tr><td>Petugas Kuitansi</td><td><?= $srt['petugas_kuitansi']; ?></td></tr>
                  <tr><td>Tanggal Wajib Setor</td><td><?= $srt['tgl_waset']; ?></td></tr>
                  <tr><td>Tanggal Tanggapan Tertulis</td><td><?= $srt['tgl_tanter']; ?></td></tr>
                  <tr><td>Tembusan</td><td><?= $srt['tembusan']; ?></td></tr>
                  <tr><td>Tanggal Input</td><td><?= $srt['tgl_SuratKeluar']; ?></td></tr>
                  <tr><td>Yang Membuat</td> <td><?= $srt['userid'];?></td></tr>
                </tbody>
                    <?php 
                        }
                    } ?>
                </tbody>
              </table><br>
              <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

