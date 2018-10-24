    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Surat Teguran
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              <?php 
             $date =date('y-m-d');
                 if (!empty($ubahskeluar)){
                    foreach($ubahskeluar as $usk){ ?>
            <form action="<?= base_url('skeluar/gantiDatasteguran') ?>" role="form" method="post">
               <input class="form-control" type="hidden" name="userid"  value="<?php echo $username?>">
               <input class="form-control" type="hidden" name="tanggal" value="<?php echo $date;?>"> 

               <div class="form-group">
                  <label>No Surat</label>
                  <div class="row">
                    <div class="col-md-2">
                      <input class="form-control"  type="text" name="no" value="<?= $usk['no'] ?>" readonly="">
                    </div>
                    <div class="col-md-10">
                      <input class="form-control" placeholder="Enter ..." value="<?= $usk['no_surat'] ?>" type="text" name="nosurat">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Prihal</label>
                  <input class="form-control" value="<?= $usk['perihal'] ?>" placeholder="Enter ..." type="text" name="prihal" required="">
                </div>
                <div class="form-group">
                  <label>Tujuan</label>
                  <input class="form-control" value="<?= $usk['tujuan'] ?>" placeholder="Enter ..." type="text" name="tujuan" required="">
                </div>
                <div class="form-group">
                  <label>Nama Tujuan</label>
                  <input class="form-control" value="<?= $usk['nama_tujuan'] ?>" placeholder="Enter ..." type="text" name="namatujuan" required="">
                </div>

                <div class="form-group">
                  <label>Jenis Surat</label>
                   <input class="form-control" value="<?= $usk['jenis_surat'] ?>" placeholder="Enter ..." type="text" name="cjenissurat_update" id="cjenissurat_update" readonly="">

                <!--   <select name="cjenissurat" id="cjenissurat" class="form-control">
                    <option hidden="true" selected>Pilih Jenis Surat</option>
                    <option value="Pengembalian Tidak Kuota" <?php if ($usk['jenis_surat'] == 'Pengembalian Tidak Kuota') {echo "selected";} ?>>Surat ACC Pengembalian Tidak Kuota</option>
                    <option value="Pengembalian Diskon Guru" <?php if ($usk['jenis_surat'] == 'Pengembalian Diskon Guru') {echo "selected";} ?>>Surat ACC Pengembalian Diskon Guru</option>
                    <option value="Pengembalian Pindah Program"<?php if ($usk['jenis_surat'] == 'Pengembalian Pindah Program') {echo "selected";} ?>>Surat ACC Pengembalian Pindah Program</option>
                    <option value="Pengembalian Pengalihan Biaya"<?php if ($usk['jenis_surat'] == 'Pengembalian Pengalihan Biaya') {echo "selected";} ?>>Surat ACC Pengembalian Pengalihan Biaya</option>
                    <option value="Pengembalian Diskon Karyawan"<?php if ($usk['jenis_surat'] == 'Pengembalian Diskon Karyawan') {echo "selected";} ?>>Surat ACC Pengembalian Diskon Karyawan</option>
                    <option value="Pengembalian Diskon Pengajar"<?php if ($usk['jenis_surat'] == 'Pengembalian Diskon Pengajar') {echo "selected";} ?>>Surat ACC Pengembalian Diskon Pengajar</option>
                  </select> -->
                </div>

            <!-- pengelommpokkan jenis surat -->
                <div id="TidakKuota">
                  <div class="form-group">
                  <label>Pemeriksa</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="pemeriksa"required="" value="<?= $usk['pemeriksa'] ?>" >
                </div>
                    <div class="form-group">
                      <label>Bagian yang ditegur</label>
                      <input class="form-control"value="<?= $usk['bgn_tegur'] ?>"  placeholder="Enter ..." type="text" required="" name="bgntegur">
                    </div>
                    <div class="form-group">
                      <label>Teguran</label>
                      <input class="form-control" value="<?= $usk['teguran'] ?>" placeholder="Enter ..." type="text" required="" name="teguran">
                    </div>
                    <div class="form-group">
                      <label>Penutup</label>
                      <input class="form-control" value="<?= $usk['penutup'] ?>" placeholder="Enter ..." type="text" required="" name="penutup">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" value="<?= $usk['tembusan'] ?>" placeholder="Enter ..." type="text" required="" name="tbsteguran">
                    </div>
                    <?php } } ?>
                </div>

                <button type="submit" class="pull-right btn btn-default" id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->