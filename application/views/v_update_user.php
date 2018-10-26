    <section class="content-header">
      <h1><span class="fa fa-edit"></span>
        Edit User
      </h1>
    </section>
<?php $date = Date('d-m-y');
$jabatan = explode(" ", $user['jabatan']);
?>
    <!-- Main content -->
    <section class="content">
      <div class="box-body">
            <form action="<?= base_url('Login/updateDatauser')?>" role="form" method="post" name="user">
                <!-- text input -->
                <input class="form-control" placeholder="Enter ..." type="hidden" name="id" id="id" required="" value="<?= $user['id'] ?>">

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="nama_lengkap" required="" value="<?= $user['nama_lengkap'] ?>">
                </div>
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-3">
                  <label>Jabatan</label>
                  <select name="jabatan1" class="form-control"> 
                    <option hidden="true" selected>Pilih Jabatan</option>
                    <option value="Kasie" <?php if($jabatan[0] == "Kasie") echo "selected" ?> >Kasie</option>
                    <option value="Staff" <?php if($jabatan[0] == "Staff") echo "selected" ?>>Staff</option>
                  </select>
                  </div>
                  <div class="col-md-9">
                    <label>Bagian</label>
                    <input class="form-control" placeholder="Masukan Nama Bagian" type="text" name="jabatan2" value="<?= $jabatan[1]?>">
                    <p><i></i></p>
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="username" id="hal" required="" value="<?= $user['username'] ?>">
                </div>
                <div class="form-group">
                  <input type="checkbox" onclick="ubah(this)">
                  Ubah Password <br>
                  <label>Password</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="password" id="password" required="" disabled="true">
                </div>
                <a href="<?= base_url('Login/data_table/') ?>" class="btn btn-primary btn btn-sm"><i class="fa fa-mail-reply"></i> Kembali</a>
                <button type="submit" name="savesm" class="pull-right btn btn-success" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
  </div>

  <script language="javascript">
    function ubah(what)
    {
      if(what.checked){
        document.user.password.disabled=0
      }else{
        document.user.password.disabled=1
      }
    }
</script>