    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Keluar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('skeluar/masukandata') ?>" role="form" method="post">
              <?php 
              //print_r($user);
              $date =date('y-m-d');
              foreach($get_no as $row) {
               $surat = $row->no_surat;
              }
              $no = $surat + 1;
              ?>
               <input class="form-control" type="text" name="userid" value="<?php echo $username .'-'.$jabatan.'-'.$id?>">
               <input class="form-control" type="hidden" name="tanggal" value="<?php echo $date; ?>"> 
               <!-- text input -->
               <div class="form-group">
                  <label>No Surat</label>
                  <div class="row">
                    <div class="col-md-2">
                      <input class="form-control" type="text" name="no" value="<?php echo $no;?>"  readonly>
                    </div>
                    <div class="col-md-10">
                      <input class="form-control" placeholder="Enter ..." type="text" name="nosurat">
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <label>Jenis Surat</label>
                  <select name="cjenissurat" id="cjenissurat" class="form-control">
                    <option hidden="true" selected>Pilih Jenis Surat</option>
                    <option value="Pencairan">Surat Pencairan</option>
                    <option value="Teguran">Surat Teguran</option>
                    <option value="Peringatan">Surat Peringatan</option>
                  </select>
                </div>
                

               

                <!-- pengelommpokkan jenis surat -->
                <div id="Pencairan">
                  <div class="form-group" id="Pencairan">
                  <label>Perihal</label>
                  <select name="prihal" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option hidden="true" selected>Pilih Perihal</option>
                      <option value="Pengembalian Tidak Kuota">Surat ACC Pengembalian Tidak Kuota</option>
                      <option value="Pengembalian Diskon Guru">Surat ACC Pengembalian Diskon Guru</option>
                      <option value="Pengembalian Pindah Program">Surat ACC Pengembalian Pindah Program</option>
                      <option value="Pengembalian Pengalihan Biaya">Surat ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Pengembalian Diskon Karyawan">Surat ACC Pengembalian Diskon Karyawan</option>
                      <option value="Pengembalian Diskon Pengajar">Surat ACC Pengembalian Diskon Pengajar</option>
                  </select>
              </div>
                       <div class="form-group">
                      <label>Tujuan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="tujuan"  id="Pencairan" required="" >
                    </div>
                    <div class="form-group">
                      <label>Nama Tujuan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="namatujuan"  id="Pencairan" required="">
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input class="form-control" id="Pencairan" placeholder="Enter ..." type="text" required="" name="nama_siswa">
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <input class="form-control" id="Pencairan" placeholder="Enter ..." type="text" required="" name="kelas">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Bayar + PT</label>
                      <input class="form-control" id="Pencairan" placeholder="Enter ..." type="text" required="" name="jumlahbayar_pt">
                    </div>
                    <div class="form-group">
                      <label>Pengembalian Norek</label>
                      <input class="form-control" id="Pencairan" placeholder="Enter ..." type="text" required="" name="norek">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" id="Pencairan" placeholder="Enter ..." type="text" required="" name="tembusan">
                    </div>
                    
                </div>

                <button type="submit" class="pull-right btn btn-default" id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->