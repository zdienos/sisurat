    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
    </section>
<section class="content">
      <div class="row">
      <div class="col-xs-12">
      <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
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
                          <a href="<?= base_url('Smasuk/ubahDatasuratmasuk/') . $srt->no_surat ?>" class="btn btn-primary">Lihat</a>
                          <a href="<?= base_url('Smasuk/hapusDatasuratmasuk/') . $srt->no_surat ?>" class="btn btn-danger" onClick='myFunction()'>Delete</a>
                          </td>
                        </tr>

                    <?php 
                        }
                    } else { ?>

                    <tr>
                      <td colspan="7" class="text-center">tidak ada data</td>
                    </tr>

                    <?php
                    } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>