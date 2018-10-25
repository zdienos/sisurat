    <section class="content-header">
      <h1><span class="fa fa-line-chart"></span>
        Data User
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
                  <th>Nama</th>
                  <th>Password</th>
                  <th>Jabatan</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    if (!empty($user)){
                    foreach($user as $srt){ ?>

                        <tr>
                          <td><?= $srt->username; ?></td>
                          <td><?= $srt->password; ?></td>
                          <td><?= $srt->jabatan; ?></td>
                          <td>
                          <a href="<?= base_url('Login/hapusDatauser/') . $srt->id ?>" class="btn btn-danger">Delete</a>
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
              </table> <br>
              <a href="<?= base_url('Login/user/') ?>" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>