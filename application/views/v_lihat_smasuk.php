    <section class="content-header">
      <h1><span class="fa fa-eye"></span>
        Data Surat Masuk
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
                  <tr><td>No Surat</td><td><?= $srt->no_surat; ?></td> </tr>
                  <tr><td>Hal</td> <td><?= $srt->hal; ?></td></tr>
                  <tr><td>Kepada</td>  <td><?= $srt->kepada ?></td></tr>
                  <tr><td>Dari</td> <td><?= $srt->dari ?></td></tr>
                  <tr><td>Keterangan</td><td><?= $srt->keterangan; ?></td></tr>
                  <tr><td>Tanggal Surat</td> <td><?= $srt->tanggal;?></td></tr>
                  <tr><td>Tanggal Input</td> <td><?= $srt->tgl_input;?></td></tr>
                  <tr><td>Yang Menginput</td> <td><?= $srt->userid;?></td></tr>
                  <tr><td>Jenis Surat</td> <td><?= $srt->jenissurat;?></td></tr>
                  <tr><td>Arsip Surat</td> <td><a href="<?= base_url('assets/arsip/').$srt->arsip ?>"">Lihat Surat </a></td></tr>
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

