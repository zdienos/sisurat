    <section class="content-header">
      <h1>
        User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('Login/masukandatauser')?>" role="form" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="nama" id="nosurat" required="">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="password" id="hal" required="">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="jabatan" id="kepada" required="">
                </div>
                <button type="submit" name="savesm" class="pull-right btn btn-default" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
                <a href="<?= base_url('Login/data_table/')?>" class="btn btn-primary">Lihat Data</a>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
  </div>