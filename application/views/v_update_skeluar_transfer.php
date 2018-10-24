    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Surat Keluar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              <?php 
               $date =date('y-m-d');

               foreach($ubahskeluar as $l) { 
                  $no = $l['no'];
                  $no_surat = $l['no_surat'];
                  $perihal = $l['perihal'];
                  $jenis_pencairan = $l['jenis_pencairan'];
                  $tujuan = $l['tujuan'];
                  $nama_tujuan = $l['nama_tujuan'];
                  $tgl_pencairan =$l['tgl_pencairan'];
                  $userid = $l['userid'];
                  }

                 if (!empty($ubahskeluar)){
                ?>
            <form action="<?= base_url('skeluar/gantiDataskeluar_transfer') ?>" role="form" method="post">
               <input class="form-control" type="hidden" name="userid"  value="<?php echo $username?>">
               <input class="form-control" type="hidden" name="tanggal" value="<?php echo $date;?>"> 

               <div class="form-group">
                  <label>No Surat</label>
                  <div class="row">
                    <div class="col-md-2">
                      <input class="form-control"  type="text" name="no" value="<?= $no ?>" readonly="">
                    </div>
                    <div class="col-md-10">
                      <input class="form-control" placeholder="Enter ..." value="<?= $no_surat ?>" type="text" name="nosurat">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Prihal</label>
                  <input class="form-control" value="<?= $perihal ?>" placeholder="Enter ..." type="text" name="prihal" readonly="">
                </div>
                <div class="form-group">
                  <label>Jenis Pencairan</label>
                  <input class="form-control" value="<?= $jenis_pencairan ?>" placeholder="Enter ..." type="text" name="jenis_pencairan" readonly="">
                </div>
                 <div class="form-group">
                  <label>Tanggal Pencairan</label>
                  <input class="form-control" type="date" name="tgl_pencairan" value="<?= $tgl_pencairan ?>" placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
                  <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                </div>
              
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          <?php if($jenis_pencairan == "mgm dan pengembalian biaya"){?>
              
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
                          <?php foreach ($ubahskeluar as $l ) { ?>
                          <tr>
                            <td><input name="ckcDel[]" type="checkbox" /></td>
                            <td><input name="bank_mb[]" value="<?= $l['bank'] ?>" /></td>
                            <td><input name="jmlor_mgm_mb[]" value="<?= $l['jml_order_mgm'] ?>" /></td>
                            <td><input name="jmlsis_mgm_mb[]" value="<?= $l['jml_siswa_mgm'] ?>" size="5" /></td>
                            <td><input name="jmlor_biaya_mb[]" value="<?= $l['jml_order_biaya'] ?>" size="3" /></td>
                            <td><input name="jmlsis_biaya_mb[]" value="<?= $l['jml_siswa_biaya'] ?>" size="3" /></td>
                          </tr>
                        <?php }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>          
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          <?php } elseif ($jenis_pencairan == "mgm") { ?>
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
                      <?php foreach ($ubahskeluar as $l ) { ?>
                    <tr>
                      <td><input name="ckcDel[]" type="checkbox" /></td>
                      <td><input name="bank_m[]" value="<?= $l['bank'] ?>" /></td>
                      <td><input name="jmlor_mgm_m[]" value="<?= $l['jml_order_mgm'] ?>" /></td>
                      <td><input name="jmlsis_mgm_m[]" value="<?= $l['jml_siswa_mgm'] ?>" size="5" /></td>
                    </tr>
                    <?php }?>
                    </tbody>
                  </table>
                 </div>
               </div>
             </div>
           </div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      <?php } elseif ($jenis_pencairan == "pengembalian biaya"){ ?>
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
                    <?php foreach ($ubahskeluar as $l ) { ?>
                    <tr>
                      <td><input name="ckcDel[]" type="checkbox" /></td>
                      <td><input name="bank_b[]" value="<?= $l['bank'] ?>" /></td>
                      <td><input name="jmlor_biaya_b[]" value="<?= $l['jml_order_biaya'] ?>" size="3" /></td>
                      <td><input name="jmlsis_biaya_b[]" value="<?= $l['jml_siswa_biaya'] ?>" size="3" /></td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
<!--========================================TRANFER PENCAIRAN SELESAI===========================================  -->
<?php } 
}?>

                <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Kembali</a>
                <button type="submit" class="pull-right btn btn-success " id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->