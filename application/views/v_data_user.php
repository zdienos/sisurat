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
              <h3 class="box-title"><span class="fa fa-files-o"></span> Data Table</h3>
            </div>
            <!-- /.box-header -->

             <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-succses alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><span class="icon fa fa-check"></span><?=$this->session->flashdata('success')?></h4>
              <h5><?=$this->session->flashdata('message')?></h5>
            </div>
          <?php } ?>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    if (!empty($user)){
                    foreach($user as $srt){ ?>
                        <tr>
                          <td><?= $srt->nama_lengkap; ?></td>
                          <td><?= $srt->jabatan; ?></td>
                          <td><?= $srt->username; ?></td>
                          <td>
                          <a href="<?= base_url('Login/Edit/') . $srt->id ?>" class="btn btn-success">Edit</a>
                          <a href="<?= base_url('Login/hapusDatauser/') . $srt->id ?>" class="btn btn-danger" onClick="return doconfirm();">Delete</a>
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
              <?php echo $paging ?>
              <div class="pull-left">
              
              </div>
            </div>
            <!-- /.box-body -->

</div>
<a href="<?= base_url('Login/user/') ?>" class="btn btn-primary"><span class="fa fa-plus-circle"></span>  &nbsp Tambah User</a>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

    <script>
      function doconfirm() {
        x = confirm("Are you sure to delete permanently?");
          if(x!=true)
          {
            return false;
          }
        }
    </script>