    <section class="content-header">
      <h1><span class="fa fa-users"></span>
        User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('Login/masukandatauser')?>" role="form" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input class="form-control" placeholder="Masukan Nama Lengkap Beserta Gelar" type="text" name="nama_lengkap" required="">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" placeholder="Masukan Username" type="text" name="nama" required="">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" placeholder="Masukan Password" type="text" name="password" required="">
                </div>
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-3">
                  <label>Jabatan</label>
                  <select name="jabatan1" class="form-control"> 
                    <option hidden="true" selected>Pilih Jabatan</option>
                    <option value="Kasie">Kasie</option>
                    <option value="Staff">Staff</option>
                  </select>
                  </div>
                  <div class="col-md-9">
                    <label>Bagian</label>
                    <input class="form-control" placeholder="Masukan Nama Bagian" type="text" name="jabatan2">
                    <p><i></i></p>
                  </div>
                  </div>
                </div>
                <button type="submit" name="savesm" class="pull-right btn btn-primary" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
                <a href="<?= base_url('Login/data_table/')?>" class="btn btn-primary">Lihat Data</a>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
