    <section class="content-header">
      <h1><span class="fa fa-eye"></span>
        Data Surat peringatan
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
                  <tr><td>Lokasi Tujuan</td><td><?= $srt['loktujuan']; ?></td></tr>
                  <tr><td>NIP</td><td><?= $srt['nip']; ?></td></tr>
                  <tr><td>SP Ke</td><td><?= $srt['spke']; ?></td></tr>
                  <tr><td>Kesalahan</td><td><?= $srt['kesalahan']; ?></td></tr>
                  <tr><td>Tembusan</td><td><?= $srt['tembusan']; ?></td></tr>
                  <tr><td>Tanggal Input</td><td><?= $srt['tgl_SuratKeluar']; ?></td></tr>
                  <tr><td>Yang Membuat</td> <td><?= $srt['userid'];?></td></tr>
                </tbody>
                    <?php 
                        }
                    } ?>
                </tbody>
              </table><br>
              <button type="button" class="btn btn-primary" onclick="history.back();"> <i class="fa fa-mail-reply"></i> &nbsp&nbsp Kembali</button>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

