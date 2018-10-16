    <section class="content-header">
      <h1>
        Data Surat Teguran
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
                // print_r($lihat);
                 if (!empty($lihat)){
                    foreach($lihat as $srt){ ?>
				  <tr><td>No Surat</td> <td><?php echo $srt['no'] .'/'. $srt['no_surat'];?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $srt['perihal']; ?></td> </tr>
                  <tr><td>Nama Tujuan</td> <td><?= $srt['nama_tujuan']; ?></td></tr>
                  <tr><td>Tujuan</td>  <td><?= $srt['tujuan'] ?></td></tr>
                  <tr><td>Jenis Surat</td> <td><?= $srt['jenis_surat'] ?></td></tr>
                  <tr><td>Pemeriksa</td><td><?= $srt['pemeriksa']; ?></td></tr>
                  <tr><td>Bagian yang menegur</td><td><?= $srt['bgn_tegur']; ?></td></tr>
                  <tr><td>Teguran</td><td><?= $srt['teguran']; ?></td></tr>
                  <tr><td>Penutup</td><td><?= $srt['penutup']; ?></td></tr>
                  <tr><td>Tembusan</td><td><?= $srt['tembusan']; ?></td></tr>
                  <tr><td>Tanggal Input</td><td><?= $srt['tgl_SuratKeluar']; ?></td></tr>
                  <tr><td>Yang Membuat</td> <td><?= $srt['userid'];?></td></tr>
                </tbody>
                    <?php 
                        }
                    } ?>
                </tbody>
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
