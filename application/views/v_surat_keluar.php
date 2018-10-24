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
              $date =date('y-m-d');
              ?>
               <input class="form-control" type="hidden" name="userid" value="<?php echo $username?>">
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
                  <!--   <?php 
                      //if (($username == "bunia") || ($username == "bu dewi")) { ?> -->
                      <option value="Transfer"> Transfer Pencairan </option>
                      <option value="Pembayaran">Surat Pembayaran Ekspedisi Pengiriman Barang POS GIRO</option>
                  </select>
                    <!-- <?php //}
                    //?> -->
                </div>
                <div id="pengirim">
                  <div class="form-group">
                    <label>Nama Penerima</label>
                    <input class="form-control" placeholder="Masukan Nama Penerima" type="text" name="namatujuan">
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
                          </select>
                      </div>
                      <div class="col-md-9">
                         <label>Kota Penerima</label>
                         <input class="form-control" placeholder="Masukan Kota Penerima" type="text" name="tujuan">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="prihal">
                <div class="form-group">
                  <label>Perihal</label>
                  <select name="prihal" id="prihal_fee" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" onchange="gantilabel()">
                    <option hidden="true" selected>Pilih Perihal</option>
                      <option value="Surat ACC Pencairan PT Kolektif/Bimker">Surat ACC Pencairan PT Kolektif/Bimker</option>
                      <option value="Surat ACC Pengembalian Kelas Tidak Kuota">Surat ACC Pengembalian Kelas Tidak Kuota</option>
                      <option value="Surat ACC Pengembalian Diskon Guru">Surat ACC Pengembalian Diskon Guru</option>
                      <option value="Surat ACC Pengembalian Pindah Program">Surat ACC Pengembalian Pindah Program</option>
                      <option value="Surat ACC Pengembalian Pengalihan Biaya">Surat ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Surat ACC Pengembalian Diskon Karyawan">Surat ACC Pengembalian Diskon Karyawan</option>
                      <option value="Surat ACC Pengembalian Diskon Pengajar">Surat ACC Pengembalian Diskon Pengajar</option>
                      <option value="Surat Tidak ACC Pencairan PT Kolektif/Bimker">Surat Tidak ACC Pencairan PT Kolektif/Bimker</option>
                      <option value="Surat Tidak ACC Pengembalian Kelas Tidak Kuota">Surat Tidak ACC Pengembalian Kelas Tidak Kuota</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Guru">Surat Tidak ACC Pengembalian Diskon Guru</option>
                      <option value="Surat Tidak ACC Pengembalian Pindah Program">Surat Tidak ACC Pengembalian Pindah Program</option>
                      <option value="Surat Tidak ACC Pengembalian Pengalihan Biaya">Surat Tidak ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Karyawan">Surat Tidak ACC Pengembalian Diskon Karyawan</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Pengajar">Surat Tidak ACC Pengembalian Diskon Pengajar</option>
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
                      <input class="form-control" placeholder="Masukan Jumlah yang disetujui" type="text" name="jumlahbayar_pt">
                    </div>
                    <div class="form-group">
                      <label id="norek">Norek Siswa</label>
                      <input class="form-control" placeholder="Masukan No. Rekening" type="text" name="norek">
                      <p><i>Contoh: BRI <b>&lt;br&gt;</b> 0883 01 017263 530 <b>&lt;br&gt;</b> a.n Srimulyani | <b>&lt;br&gt;</b> untuk membuat baris baru (Enter)</i> </p>
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
                                <td><input name="fee_siswa[]" value=""/></td>
                                <td><textarea name="ket[]" cols="50" ></textarea> <p><i>Jika ingin membuat baris baru(Enter) tambahkan <b>&lt;br&gt;</b> </i></p></td>
                              </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id= "Transfer">
                <div class="form-group">
                  <label>Tanggal Pencairan</label>
                  <input class="form-control" type="date" name="tgl_pencairan" placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
                  <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                </div>
                <div class="form-group">
                  <label>Jenis Pencairan</label>
                  <select name="jenis_pencairan" id="jenis_pencairan" class="form-control">
                    <option value="mgm">MGM</option>
                    <option value="pengembalian biaya">Pengembalian Biaya</option>
                    <option value="mgm dan pengembalian biaya">MGM dan Pengembalian Biaya</option>
                  </select>
                </div>
               
                  <!-- <div class="form-group" >
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="box"> -->
                </div>
                        <div id="mgm_biaya"> 
                           <div  class="form-group">
                            <button id="btnAddRow_mgm_biaya" type="button">
                                Add Row
                            </button>
                            <button id="btnDelLastRow_mgm_biaya" type="button">
                                Delete Last Row
                            </button>
                            <button id="btnDelCheckRow_mgm_biaya" type="button">
                                Delete Checked Row
                           </div> 
                           <table id="tblAddRow_mgm_biaya" border="1" width="100%" class="table table-bordered">
                              <thead>
                                <tr>
                                  <th rowspan="2"><input type="checkbox" id="checkedAll"/></th>
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
                                  <td><input name="bank[]" value="" /></td>
                                  <td><input name="jmlor_mgm[]" value="" /></td>
                                  <td><input name="jmlsis_mgm[]" value="" size="5" /></td>
                                  <td><input name="jmlor_biaya[]" value="" size="3" /></td>
                                  <td><input name="jmlsis_biaya[]" value="" size="3" /></td>
                                </tr>
                              </tbody>0
                            </table>
                        </div>

                        <div id="mgm">
                          <div  class="form-group">
                            <button id="btnAddRow_mgm" type="button">
                                Add Row
                            </button>
                            <button id="btnDelLastRow_mgm" type="button">
                                Delete Last Row
                            </button>
                            <button id="btnDelCheckRow_mgm" type="button">
                                Delete Checked Row
                           </div> 
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
                                <td><input name="bank[]" value="" /></td>
                                <td><input name="jmlor_mgm[]" value="" /></td>
                                <td><input name="jmlsis_mgm[]" value="" size="5" /></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      <div id="biaya">
                        <div  class="form-group">
                            <button id="btnAddRow_biaya" type="button">
                                Add Row
                            </button>
                            <button id="btnDelLastRow_biaya" type="button">
                                Delete Last Row
                            </button>
                            <button id="btnDelCheckRow_biaya" type="button">
                                Delete Checked Row
                           </div> 
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
                            <td><input name="bank[]" value="" /></td>
                            <td><input name="jmlor_biaya[]" value="" size="3" /></td>
                            <td><input name="jmlsis_biaya[]" value="" size="3" /></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
          


                <!-- pengelommpokkan jenis surat Peringatan-->
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
                <!-- pengelommpokkan jenis surat Teguran-->
                <div id="Teguran">
                    <div class="form-group">
                      <label>Pemeriksa</label>
                      <input class="form-control" placeholder="Masukan Pemeriksa" type="text" name="pemeriksa">
                      <p><i>Contoh : "Bagian Keuangan"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Bagian yang di tegur</label>
                      <input class="form-control" placeholder="Masukan Bagian yang ditegur" type="text" name="bgntegur">
                      <p><i>Contoh : "Customer Service"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Teguran</label>
                      <input class="form-control" placeholder="Masukan Teguran" type="text" name="teguran">
                    </div>
                    <div class="form-group">
                      <label>Nasihat</label>
                      <input class="form-control" placeholder="Masukan Nasihat" type="text" name="penutup">
                      <p><i>Contoh : "Atas tidak melakukan kontrol kepada staff. Harap selanjutnya melakukan kontrol kepada staff."</i></p>
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tbsteguran">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
                    </div>
                </div>
                <!-- pengelommpokkan jenis Surat Pembayaran Ekspedisi Pengiriman Barang (POS GIRO)-->
                <div id="Pembayaranpos">
                    <div class="form-group">
                      <label>Periode Pengiriman</label>
                      <input class="form-control" placeholder="Masukan Periode pengiriman" type="text" name="periode">
                      <p><i>Contoh : "24 agustus - 24 september"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Total Tagihan</label>
                      <input class="form-control" placeholder="Masukan Total Tagihan" type="text" name="totaltagihan">
                      <p><i>Contoh : "Rp.4.470.351"</i></p>
                    </div>
                    <div class="form-group">
                      <label>Nomer Rekening</label>
                      <input class="form-control" placeholder="Masukan Nomer Rekening" type="text" name="nomerrekening">
                      <p><i>Contoh : "BCA 5170-147-822 a.n Iren"</i></p>
                    </div>
                </div>
                <button type="submit" class="pull-right btn btn-app" id=""><i class="fa fa-save"></i>Save</button>
            </form>
      </div>
    </section>

    <!-- /.content -->