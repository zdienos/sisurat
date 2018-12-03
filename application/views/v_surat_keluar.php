    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><span class="fa fa-envelope"></span>
        Surat Keluar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('skeluar/masukandata') ?>" role="form" method="post">
              <?php 
              $date =date('y-m-d');
              $jabat=explode(" ", $jabatan)
              ?>
               <input class="form-control" type="hidden" name="userid" value="<?php echo $nama_lengkap.'-'.$jabatan?>">
               <input class="form-control" type="hidden" name="tanggal" value="<?php echo $date; ?>"> 
               <!-- text input -->
               <div class="form-group">
                  <label>Kode Surat</label>
                    <input class="form-control" placeholder="Masukan Kode Surat" type="text" name="nosurat">
                    <p><i>Contoh : "MK-KEU/../../.."</i></p>
                </div>

                <div class="form-group">
                  <label>Jenis Surat</label>
                  <select name="cjenissurat" id="cjenissurat" class="form-control">
                    <option hidden="true" selected>Pilih Jenis Surat</option>
                    <option value="Pencairan">Surat Pencairan</option>
                    <option value="Teguran">Surat Teguran</option>
                    <option value="Peringatan">Surat Peringatan</option>
                    <option value="Pengecekan">Surat Pengecekan</option>
                    <option value="Intruksi">Surat Intruksi Transfer Kekurangan Storan</option>
                    <?php 
                      if ($jabat[0] == "Kasie") { ?>
                      <option value="Transfer"> Surat Transfer Pencairan </option>
                      <option value="Pembayaran">Surat Pembayaran Ekspedisi Pengiriman Barang POS GIRO</option>
                      <option value="Sidak">Surat Sidak</option>
                    <?php } ?>
                  </select>

                </div>
                <div id="pengirim">
                 <div class="row">
                  <div class="col-md-3">
                       <label>Bapak/Ibu</label>
                          <select name="bpkibu" class="form-control"> 
                            <option hidden="true" selected>Pilih</option>
                            <option value="Bapak">Bapak</option>
                            <option value="Ibu">Ibu</option>
                            <option value="">Lain-lain(kosong)</option>
                          </select>
                  </div>
                  <div class="col-md-9">
                    <label>Nama Penerima</label>
                    <input class="form-control" placeholder="Masukan Nama Penerima" type="text" name="namatujuan">
                    <p><i></i></p>
                  </div>
                 </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                         <label>Jabatan Penerima</label>
                          <select name="tujuan1" class="form-control"> 
                            <option hidden="true" selected>Pilih Jabatan</option>
                            <option value="Kepala Wilayah">Kepala Wilayah</option>
                            <option value="Kepala Cabang">Kepala Cabang</option>
                            <option value="Kepala Rayon">Kepala Rayon</option>
                            <option value="Kepala Unit">Kepala Unit</option>
                            <option value="Kepala Sekretariat">Kepala Sekretariat</option>
                            <option value="Plt. Kepala Cabang">Plt. Kepala Cabang</option>
                            <option value="Plt. Kepala Unit">Plt. Kepala Unit</option>
                            <option value="">Lain-lain</option>
                          </select>
                      </div>
                      <div class="col-md-9">
                         <label>Kota Penerima</label>
                         <input class="form-control" placeholder="Masukan Kota Penerima" type="text" name="tujuan">
                         <p><i>Jika Jabatan Penerima tidak ada dalam ComboBox Pilih lain-lain dan isi di kota Penerima Contoh: <b>... ... Surabaya</b></i></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="prihal">
                <div class="form-group">
                  <label>Perihal</label>
                  <select name="prihal" id="prihal_fee" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" onchange="gantilabel()">
                    <option hidden="true" selected>Pilih Perihal</option>
                      <option value="Surat ACC Pencairan PT Kolektif">Surat ACC Pencairan PT Kolektif</option>
                      <option value="Surat ACC Pencairan Fee Bimker">Surat ACC Pencairan Fee Bimker</option>
                      <option value="Surat ACC Pengembalian Psikotes">Surat ACC Pengembalian Psikotes</option>
                      <option value="Surat ACC Pengembalian Kelas Tidak Kuota">Surat ACC Pengembalian Kelas Tidak Kuota</option>
                      <option value="Surat ACC Pengembalian Diskon Anak Guru">Surat ACC Pengembalian Diskon Anak Guru</option>
                      <option value="Surat ACC Pengembalian Pindah Program">Surat ACC Pengembalian Pindah Program</option>
                      <option value="Surat ACC Pengembalian Pengalihan Biaya">Surat ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Surat ACC Pengembalian Diskon Karyawan">Surat ACC Pengembalian Diskon Karyawan</option>
                      <option value="Surat ACC Pengembalian Diskon Pengajar">Surat ACC Pengembalian Diskon Pengajar</option>
                      <option value="Surat ACC Pengembalian Kelebihan Bayar">Surat ACC Pengembalian Kelebihan Bayar</option>
                      <option value="Surat ACC Pengembalian Jaminan PTN">Surat ACC Pengembalian Jaminan PTN</option>
                      <option value="Surat ACC Pengembalian Jaminan SMA Favorit">Surat ACC Pengembalian Jaminan SMA Favorit</option>
                      <option value="Surat ACC Diskon Susulan">Surat ACC Diskon Susulan</option>
                      <option value="Surat Tidak ACC Pencairan PT Kolektif">Surat Tidak ACC Pencairan PT Kolektif</option>
                      <option value="Surat Tidak ACC Pencairan Fee Bimker">Surat Tidak ACC Pencairan Fee Bimker</option>
                      <option value="Surat Tidak ACC Pengembalian Kelas Tidak Kuota">Surat Tidak ACC Pengembalian Kelas Tidak Kuota</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Anak Guru">Surat Tidak ACC Pengembalian Diskon Anak Guru</option>
                      <option value="Surat Tidak ACC Pengembalian Pindah Program">Surat Tidak ACC Pengembalian Pindah Program</option>
                      <option value="Surat Tidak ACC Pengembalian Pengalihan Biaya">Surat Tidak ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Karyawan">Surat Tidak ACC Pengembalian Diskon Karyawan</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Pengajar">Surat Tidak ACC Pengembalian Diskon Pengajar</option>
                      <option value="Surat Tidak ACC Pengembalian Kelebihan Bayar">Surat Tidak ACC Pengembalian Kelebihan Bayar</option>
                      <option value="Surat Tidak ACC Pengembalian Jaminan PTN">Surat Tidak ACC Pengembalian Jaminan PTN</option>
                      <option value="Surat Tidak ACC Pengembalian Jaminan SMA Favorit">Surat Tidak ACC Pengembalian Jaminan SMA Favorit</option>
                      <option value="Surat Tidak ACC Diskon Susulan">Surat Tidak ACC Diskon Susulan</option>
                  </select>
                </div>
                </div>
               
                <!-- pengelommpokkan jenis surat PEncairan-->
                <div id="Pencairan">
                    <div class="form-group">
                      <label>Tanggal ACC Surat Marketing</label>
                      <input class="form-control" type="date" name="tglmarketing"  placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
                      <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                    </div>
                    <div class="form-group">
                      <label>TindakLanjut Memo Bagian</label>
                      <input class="form-control" placeholder="Masukan TidakLanjut" type="text" name="tindaklanjut">
                    </div>
                    <div class="form-group">
                      <label>Unit</label>
                      <input class="form-control" placeholder="Masukan Unit" type="text" name="unit">
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa </label>
                      <input class="form-control" placeholder="Masukan Nama Siswa" type="text" name="nama_siswa">
                    </div>
                    <div class="form-group">
                      <label>Kelas Siswa</label>
                      <input class="form-control" placeholder="Masukan Kelas" type="text" name="kelas">
                    </div>
                    <div class="form-group">
                      <label id="jml_disetujui">Jumlah Bayar yg Disetujui</label>
                      <input class="form-control" placeholder="Masukan Data" type="text" name="jumlahbayar_pt">
                    </div>
                    <div class="form-group">
                      <label id="norek">Norek Siswa</label>
                      <input class="form-control" placeholder="Masukan Data" type="text" name="norek">
                      <p id="ketnorek"></p>
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tbspencairan">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i> </p>
                    </div>                    
                  </div>

                  <!-- ACC Pencairan Fee PT Kolektif/Bimker -->
                  <div id="Pencairan3">
                    <div class="form-group">
                      <label>Lampiran</label>
                      <input class="form-control" placeholder="Masukan Lampiran" type="text" name="lampiran"  >
                    </div>
                    <div class="form-group">
                      <label>Tanggal ACC Surat Marketing</label>
                      <input class="form-control" type="date" name="tgl_marketing" placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
                      <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tbs_fee">
                       <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i> </p>
                    </div>
                    <div  class="form-group">
                    <button id="btnAddRow" type="button">
                        Add Row
                    </button>
                    <button id="btnDelLastRow" type="button">
                        Delete Last Row
                    </button>
                    <button id="btnDelCheckRow" type="button">
                        Delete Checked Row
                    </button>
                  </div>
                  <div class="form-group" >
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box">
                          <table id="tblAddRow" border="1" width="100%" class="table table-bordered">
                            <thead>
                              <tr>
                                <th><input type="checkbox" id="checkedAll"/></th>
                                <th>Sekolah</th>
                                <th>MOU</th>
                                <th>Program</th>
                                <th>ACC</th>
                                <th>Tidak ACC</th>
                                <th>Fee Per siswa(Rp)</th>
                                <th>Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input name="ckcDel[]" type="checkbox" /></td>
                                <td><input name="sekolah[]" value="" /></td>
                                <td><input name="mou[]" value="" /></td>
                                <td><input name="program[]" value="" size="5" /></td>
                                <td><input name="acc[]" value="" size="3" /></td>
                                <td><input name="tdk_acc[]" value="" size="3" /></td>
                                <td><input name="fee_siswa[]" value="" size="10"/><p><i>Jangan menggunakan <br>Titik "<b> . </b>" atau Koma "<b> , </b>"</i></p></td>
                                <td><textarea name="ket[]" cols="40" ></textarea> <p><i>Jika ingin membuat baris baru(Enter) tambahkan <b>&lt;br&gt;</b> </i></p></td>
                              </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<!-- =========================================TRANSFER PENCAIRAN============================================== -->
              <div id= "Transfer">
                <div class="form-group">
                  <label>Tanggal Pencairan</label>
                  <input class="form-control" type="date" name="tgl_pencairan" placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
                  <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                </div>
                <div class="form-group">
                  <label>Jenis Pencairan</label>
                  <select name="jenis_pencairan" id="jenis_pencairan" class="form-control">
                    <option hidden="true" selected>Pilih Jenis Pencairan</option>
                    <option value="mgm">MGM</option>
                    <option value="pengembalian biaya">Pengembalian Biaya</option>
                    <option value="mgm dan pengembalian biaya">MGM dan Pengembalian Biaya</option>
                  </select>
                </div>
              </div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
              <div id="mgm_biaya"> 
                 <div  class="form-group">
                    <button id="btnAddRow_1" type="button"> Add Row </button>
                    <button id="btnDelLastRow_mgm_biaya" type="button"> Delete Last Row </button>
                    <button id="btnDelCheckRow_mgm_biaya" type="button"> Delete Checked Row</button>
                 </div> 
                 <div  class="form-group">
                  <div class="row">
                   <div class="col-xs-12">
                    <div class="box">
                     <table id="tblAddRow_mgm_biaya" border="1" width="100%" class="table table-bordered">
                        <thead>
                          <tr>
                            <th rowspan="2"><input type="checkbox" id="checkedAll_mgm_biaya"/></th>
                            <th rowspan="2">Bank</th>
                            <th rowspan="2">Jumlah Order (Rp) Pencairan MGM</th>
                            <th rowspan="2">Jumlah Siswa Pencairan MGM</th>
                            <th rowspan="2">Jumlah Order (Rp) Pengembalian Biaya</th>
                            <th rowspan="2">Jumlah Siswa Pengembalian Biaya</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input name="ckcDel[]" type="checkbox" /></td>
                            <td><input name="bank_mb[]" value="" /></td>
                            <td><input name="jmlor_mgm_mb[]" value="" /><p><i>Jangan menggunakan <br>Titik "<b> . </b>" atau Koma "<b> , </b>"</i></p></td>
                            <td><input name="jmlsis_mgm_mb[]" value="" size="5" /></td>
                            <td><input name="jmlor_biaya_mb[]" value=""  /><p><i>Jangan menggunakan <br>Titik "<b> . </b>" atau Koma "<b> , </b>"</i></p></td>
                            <td><input name="jmlsis_biaya_mb[]" value="" size="5" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div id="mgm">
              <div  class="form-group">
                <button id="btnAddRow_mgm" type="button">Add Row</button>
                <button id="btnDelLastRow_mgm" type="button">Delete Last Row</button>
                <button id="btnDelCheckRow_mgm" type="button">Delete Checked Row</button>
              </div> 
              <div  class="form-group">
               <div class="row">
                <div class="col-xs-12">
                 <div class="box">
                  <table id="tblAddRow_mgm" border="1" width="100%" class="table table-bordered">
                    <thead>
                    <tr>
                      <th rowspan="2"><input type="checkbox" id="checkedAll"/></th>
                      <th rowspan="2">Bank</th>
                      <th rowspan="2">Jumlah Order (Rp) Pencairan MGM</th>
                      <th rowspan="2">Jumlah Siswa Pencairan MGM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><input name="ckcDel[]" type="checkbox" /></td>
                      <td><input name="bank_m[]" value="" /></td>
                      <td><input name="jmlor_mgm_m[]" value="" /><p><i>Jangan menggunakanTitik "<b> . </b>" atau Koma "<b> , </b>"</i></p></td>
                      <td><input name="jmlsis_mgm_m[]" value="" /></td>
                    </tr>
                    </tbody>
                  </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          <div id="biaya">
            <div  class="form-group">
              <button id="btnAddRow_biaya" type="button">Add Row</button>
              <button id="btnDelLastRow_biaya" type="button">Delete Last Row</button>
              <button id="btnDelCheckRow_biaya" type="button">Delete Checked Row</button>
            </div>
            <div  class="form-group">
             <div class="row">
              <div class="col-xs-12">
                <div class="box"> 
                  <table id="tblAddRow_biaya" border="1" width="100%" class="table table-bordered">
                  <thead>
                    <tr>
                      <th rowspan="2"><input type="checkbox" id="checkedAll"/></th>
                      <th rowspan="2">Bank</th>
                      <th rowspan="2">Jumlah Order (Rp) Pengembalian Biaya</th>
                      <th rowspan="2">Jumlah Siswa Pengembalian Biaya</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input name="ckcDel[]" type="checkbox" /></td>
                      <td><input name="bank_b[]" value="" /></td>
                      <td><input name="jmlor_biaya_b[]" value=""  /><p><i>Jangan menggunakan Titik "<b> . </b>" atau Koma "<b> , </b>"</i></p></td>
                      <td><input name="jmlsis_biaya_b[]" value="" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--========================================TRANFER PENCAIRAN SELESAI===========================================  -->

<!--======================================== SURAT SIDAK ========================================================  -->
      <div id="Sidak">
        <div class="form-group">
          <label>Perihal</label>
          <input class="form-control" placeholder="Masukan Perihal" type="text" name="perihal_sidak">
        </div>
        <div class="form-group">
          <label>Nama Penerima</label>
          <input class="form-control" placeholder="Masukan Nama Penerima" type="text" name="namapenerima_sidak">
        </div>
         <div class="form-group">
          <div class="row">
            <div class="col-md-3">
               <label>Jabatan Penerima</label>
                <select name="tujuan1_sidak" class="form-control"> 
                  <option hidden="true" selected>Pilih Jabatan</option>
                  <option value="Kepala Wilayah">Kepala Wilayah</option>
                  <option value="Kepala Cabang">Kepala Cabang</option>
                  <option value="Kepala Rayon">Kepala Rayon</option>
                  <option value="Kepala Unit">Kepala Unit</option>
                  <option value="Kepala Sekretariat">Kepala Sekretariat</option>
                  <option value="Plt. Kepala Cabang">Plt. Kepala Cabang</option>
                  <option value="Plt. Kepala Unit">Plt. Kepala Unit</option>
                  <option value="">Lain-lain</option>
                </select>
            </div>
            <div class="col-md-9">
               <label>Kota Penerima</label>
               <input class="form-control" placeholder="Masukan Kota Penerima" type="text" name="tujuan_sidak">
               <p><i>Jika Jabatan Penerima tidak ada dalam ComboBox Pilih lain-lain dan isi di kota Penerima Contoh: <b>... ... Surabaya</b></i></p>
            </div>
          </div>
        </div>
       <div class="form-group">
        <label>Tanggal Sidak</label>
        <input class="form-control" type="date" name="tgl_sidak"  placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
        <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
      </div>
      <div class="form-group">
        <label>Petugas Sidak - Jabatan Petugas Sidak</label>
        <input class="form-control" type="text" name="petugas_sidak"  placeholder="Masukan Nama Petugas Sidak & Jabatan Sidak">
        <ul><li><i>Pisahkan Nama Petugas dengan Jabatan dengan Strip <b>"-"</b></i></li>
        <li><i>Jika Nama Petugas lebih dari satu pisahkan dengan Koma<b>","</b></i></li>
        <li><i>Contoh : Agus suparman - staff keuangan,Diki Firmansyah - staff keuangan,...</i></p></li></ul>
      </div>
      <div class="form-group">
        <label>Tugas Sidak</label>
        <input class="form-control" placeholder="Masukan Tugas Sidak" type="text" name="tugas_sidak">
        <p><i>Contoh : Administrasi Keuangan,Akuntansi, dan Tangible</i></p>
      </div>
      <div class="form-group">
        <label>Tembusan</label>
        <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tembusan_sidak">
        <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
      </div>
    </div>
<!--======================================== SURAT SIDAK SELESAI ================================================  -->



<!-- ================================pengelommpokkan jenis surat Peringatan=======================================-->
                <div id="Peringatan">
                    <div class="form-group">
                      <label>Lokasi Tujuan</label>
                      <input class="form-control" placeholder="Masukan Lokasi Tujuan" type="text" name="loktujuan">
                      <p><i>Contoh : "Ganesha Operation ... "</i></p>
                    </div>
                    <div class="form-group">
                      <label>NIP</label>
                      <input class="form-control" placeholder="Masukan NIP" type="text" name="nip">
                    </div>
                    <div class="form-group">
                      <label>SP Ke</label>
                      <select name="spke" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                      </select>
                      <p><i>Cek terlebih dahulu SP yang telah di berikan <a href="<?php echo base_url('Skeluar/data_table')?>"> disini</a></i></p>
                    </div>
                    <div class="form-group">
                      <label>Kesalahan</label>
                      <textarea name="kesalahan" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tembusan">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
                    </div>
                </div>
<!-- ==================================================================================================  -->

<!-- ====================================== pengelommpokkan jenis surat Teguran ==============================  -->
                <div id="Teguran">
                    <!-- <div class="form-group">
                      <label>Bagian Pemeriksa</label>
                      <input class="form-control" placeholder="Masukan Pemeriksa" type="text" name="pemeriksa">
                      <p><i>Contoh : "Bagian Keuangan"</i></p>
                    </div> -->
                    <div class="form-group" >
                      <label>Teguran</label>
                      <!-- <input class="form-control" placeholder="Masukan Teguran" type="text" name="teguran"> -->
                      <textarea name="teguran" class="form-control" cols="10" rows="10"></textarea>
                      <!-- <p><i>Untuk memisahkan Teguran beri tanda koma <b> ("^") </b> tanpa spasi</i></p> -->
                      <ul><li><i>Pisahkan Teguran dengan tanda<b>"^"</b></i></li>
                      <li><i>Pisahkan Sub teguran dengan tanda<b>"#"</b></i></li>
                      <li><i>Contoh : Point Teguran 1 #Sub Point Teguran  1 ^Point Teguran  2 #Sub Point Teguran  2 ^Point Teguran  3 dst..</i></p></li></ul>
                    </div>
                    <!-- <div class="form-group">
                      <label>Sub Teguran</label>
                      <input class="form-control" placeholder="Masukan Sub Tegur" type="text" name="bgntegur">
                      <p><i>Untuk memisahkan Teguran beri tanda koma <b> ("#") </b> tanpa spasi</i></p>
                    </div> -->
          <!--           <div class="form-group">
                      <label>Tanggal Minta Berita Acara</label>
                      <input class="form-control" placeholder="" type="date" name="penutup">
                      <p><i>"Diisi H+3 DARI TANGGAL SURAT" & Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                    </div> -->
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tbsteguran">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
                    </div>
                </div>
<!-- ==================================================================================================  -->

<!-- ==================== pengelommpokkan jenis Surat Pembayaran Ekspedisi Pengiriman Barang (POS GIRO) =========-->
                <div id="Pembayaranpos">
                    <div class="form-group">
                      <label>Periode Pengiriman</label>
                      <input class="form-control" placeholder="Masukan Periode pengiriman" type="text" name="periode">
                      <p><i>Contoh : "24 agustus - 24 september"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Total Tagihan</label>
                      <input class="form-control" placeholder="Masukan Total Tagihan" type="text" name="totaltagihan"><p><i>Jangan menggunakan Titik "<b> . </b>" atau Koma "<b> , </b>"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Nomer Rekening</label>
                      <input class="form-control" placeholder="Masukan Nomer Rekening" type="text" name="nomerrekening">
                      <p><i>Contoh : "BCA 5170-147-822 a.n Iren"</i></p>
                    </div>
                </div>
<!-- ========================================================================================================= -->

<!-- ===================== pengelommpokkan jenis Surat Pengecekan==============-->
                <div id="Pengecekantransfer">
                    <div class="form-group">
                      <label>Cabang - Kota - Unit</label>
                      <input class="form-control" placeholder="Masukan cabang - kota - unit" type="text" name="cku">
                    </div>
                    <div class="form-group">
                      <label>No Rekening</label>
                      <input class="form-control" placeholder="Masukan No Rekening" type="text" name="norektransfer">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Transfer</label>
                      <input class="form-control" placeholder="Masukan Tanggal Transfer" type="date" name="tgltransfer">
                    </div>
                    <div class="form-group">
                      <label>Nama Pentrnasfer</label>
                      <input class="form-control" placeholder="Masukan Nana Pentransfer" type="text" name="namatransfer">
                    </div>
                    <div class="form-group">
                      <label>No Rekening Pentransfer</label>
                      <input class="form-control" placeholder="Masukan No Rekening Pentransfer" type="text" name="norekpentransfer">
                    </div>
                    <div class="form-group">
                      <label>Nominal Transfer</label>
                      <input class="form-control" placeholder="Masukan Nominal Transfer" type="text" name="nominal">
                      <p><i>Jangan menggunakan Titik "<b> . </b>" atau Koma "<b> , </b>"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Hasil Pengecekan</label>
                      <input class="form-control" placeholder="Masukan Hasil Pengecekan" type="text" name="hasil">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Konfirmasi</label>
                      <input class="form-control" placeholder="Masukan Tanggal Konfirmasi" type="date" name="tglkonfirmasi">
                    </div>
                </div>
<!-- ======================================================================================================== -->

<!-- ===================== pengelommpokkan jenis surat intruksi transfer kekurangan storan ==============-->
                <div id="Intruksitransfer">
                    <div class="form-group">
                      <label>Cabang - Kota - Unit</label>
                      <input class="form-control" placeholder="Masukan cabang - kota - unit" type="text" name="ckuitf">
                    </div>
                    <div class="form-group">
                      <label>Pembayaran dari Siswa</label>
                      <input class="form-control" placeholder="Masukan Pembayaran dari siswa" type="text" name="pembayaransiswa">
                    </div>
                    <div class="form-group">
                      <label>Kuitansi yang Di Setor</label>
                      <input class="form-control" placeholder="Masukan Kuitansi yang Di Setor" type="text" name="kuitansisetor">
                    </div>
                    <div class="form-group">
                      <label>Tanggal laporan Pembayaran</label>
                      <input class="form-control" placeholder="Masukan Tanggal laporan Pembayaran" type="date" name="tgl_lappem">
                    </div>
                    <div class="form-group">
                      <label>No Kuitansi</label>
                      <input class="form-control" placeholder="Masukan No Kuitansi" type="text" name="nokuitansi">
                    </div>
                    <div class="form-group">
                      <label>Petugas Kuitansi</label>
                      <input class="form-control" placeholder="Masukan Petugas Kuitansi" type="text" name="petugas_kuitansi">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Wajib Setor</label>
                      <input class="form-control" placeholder="Masukan Tanggal Wajib Setor" type="date" name="tgl_waset">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Tanggapan Tertulis</label>
                      <input class="form-control" placeholder="Masukan Tanggal Tanggapan Tertulis" type="date" name="tgl_tanter">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tbsintriksi">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
                    </div>
                </div>
<!-- ======================================================================================================== -->

                <button type="submit" class="pull-right btn btn-primary" id=""><span class="fa fa-save"></span>&nbsp&nbsp&nbspSave</button>
            </form>
      </div>
    </section>

    <!-- /.content -->