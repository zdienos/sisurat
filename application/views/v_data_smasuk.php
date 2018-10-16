    <section class="content-header">
      <h1>
        Data Surat Masuk
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
                <thead>
                <tr>
                  <th>No Surat</th>
                  <th>Hal</th>
                  <th>Kepada</th>
                  <th>Dari</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Button</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    if (!empty($smasuk)){
                    foreach($smasuk as $srt){ ?>

                        <tr>
                          <td><?= $srt->no_surat; ?></td>
                          <td><?= $srt->hal; ?></td>
                          <td><?= $srt->kepada; ?></td>
                          <td><?= $srt->dari; ?></td>
                          <td><?= $srt->keterangan; ?></td>
                          <td><?= $srt->tanggal; ?></td>
                          <td>
                             <?php if($jabatan == "kasi"){ ?>
                          <a href="<?= base_url('Smasuk/ubahdatasmasuk/') . $srt->id ?>" class="btn btn-success">Edit</a>
                          <a href="<?= base_url('Smasuk/lihatsuratmasuk/') . $srt->id ?>" class="btn btn-primary">Lihat</a>
                          <a href="<?= base_url('Smasuk/hapusDatasuratmasuk/') . $srt->id ?>" class="btn btn-danger" onClick='myFunction()'>Delete</a>
                          <?php }  else{?>
                           <a href="<?= base_url('Smasuk/ubahdatasmasuk/') . $srt->id ?>" class="btn btn-success">Edite</a>
                          <a href="<?= base_url('Smasuk/lihatsuratmasuk/') . $srt->id ?>" class="btn btn-primary">Lihat</a>
                          </td>
                        </tr>

                    <?php 
                       } }
                    } else { ?>

                    <tr>
                      <td colspan="7" class="text-center">tidak ada data</td>
                    </tr>

                    <?php
                    } ?>
                </tbody>
              </table>
              <a href="<?= base_url('Smasuk/index/')?>" class="btn btn-primary">Input Surat</a>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>