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
               <input class="form-control" type="hidden" name="userid" value="<?php echo $username?>">
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
                  <label>Nama Tujuan</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="namatujuan">
                </div>
                <div class="form-group">
                  <label>Tujuan</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="tujuan">
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
                <div class="form-group">
                      <label>Perihal</label>
                      <select name="prihal" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <option hidden="true" selected>Pilih Perihal</option>
                          <option value="Surat Peringatan">Surat Peringatan</option>
                          <option value="Surat Teguran">Surat Teguran</option>
                          <option value="ACC Pengembalian Tidak Kuota">Surat ACC Pengembalian Tidak Kuota</option>
                          <option value="ACC Pengembalian Diskon Guru">Surat ACC Pengembalian Diskon Guru</option>
                          <option value="ACC Pengembalian Pindah Program">Surat ACC Pengembalian Pindah Program</option>
                          <option value="ACC Pengembalian Pengalihan Biaya">Surat ACC Pengembalian Pengalihan Biaya</option>
                          <option value="ACC Pengembalian Diskon Karyawan">Surat ACC Pengembalian Diskon Karyawan</option>
                          <option value="ACC Pengembalian Diskon Pengajar">Surat ACC Pengembalian Diskon Pengajar</option>
                          <option value="ACC Pengembalian Tidak Kuota">Surat Tidak ACC Pengembalian Tidak Kuota</option>
                          <option value="ACC Pengembalian Diskon Guru">Surat Tidak ACC Pengembalian Diskon Guru</option>
                          <option value="ACC Pengembalian Pindah Program">Surat Tidak ACC Pengembalian Pindah Program</option>
                          <option value="ACC Pengembalian Pengalihan Biaya">Surat Tidak ACC Pengembalian Pengalihan Biaya</option>
                          <option value="ACC Pengembalian Diskon Karyawan">Surat Tidak ACC Pengembalian Diskon Karyawan</option>
                          <option value="ACC Pengembalian Diskon Pengajar">Surat Tidak ACC Pengembalian Diskon Pengajar</option>
                      </select>
                </div>
               
                <!-- pengelommpokkan jenis surat PEncairan-->
                <div id="Pencairan">
                    <div class="form-group">
                      <label>Tanggal Marketing</label>
                      <input class="form-control" placeholder="Enter ..." type="date" name="tglmarketing">
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="nama_siswa">
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="kelas">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Bayar + PT</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="jumlahbayar_pt">
                    </div>
                    <div class="form-group">
                      <label>Pengembalian Norek</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="norek">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="tbspencairan">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> </i></p>
                    </div>                    
                  </div>
                <!-- pengelommpokkan jenis surat Peringatan-->
                <div id="Peringatan">
                    <div class="form-group">
                      <label>Nama yang di SP</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="namasp">
                    </div>
                    <div class="form-group">
                      <label>NIP</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="nip">
                    </div>
                    <div class="form-group">
                      <label>Jabatan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="jabatan">
                    </div>
                    <div class="form-group">
                      <label>SP Ke</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="spke">
                    </div>
                    <div class="form-group">
                      <label>Kesalahan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="kesalahan">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="tembusan">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> </i></p>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Tembusan</label>
                      <input class="form-control" placeholder="Enter ..." type="date" name="tgltembusan">
                    </div>
                    <div class="form-group">
                      <label>Jam tembusan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="jamtembusan">
                    </div>
                </div>
                <!-- pengelommpokkan jenis surat Teguran-->
                <div id="Teguran">
                    <div class="form-group">
                      <label>Pemeriksa</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="pemeriksa">
                    </div>
                    <div class="form-group">
                      <label>Bagian yang di tegur</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="bgntegur">
                    </div>
                    <div class="form-group">
                      <label>Teguran</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="teguran">
                    </div>
                    <div class="form-group">
                      <label>Penutup</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="penutup">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Enter ..." type="text" name="tbsteguran">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> </i></p>
                    </div>
                </div>

                <button type="submit" class="pull-right btn btn-default" id="">Save<i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->