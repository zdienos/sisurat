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
                  <label>Jabatan</label>
                  <select name="jabatan" class="form-control"> 
                    <option hidden="true" selected>Pilih Jabatan</option>
                    <option value="Kasie Keuangan">Kasie Keuangan</option>
                    <option value="Staff Keuangan">Staff Keuangan</option>
                  </select>
                </div>
                <button type="submit" name="savesm" class="pull-right btn btn-default" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
                <a href="<?= base_url('Login/data_table/')?>" class="btn btn-primary">Lihat Data</a>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
