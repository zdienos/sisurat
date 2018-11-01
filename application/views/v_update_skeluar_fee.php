    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><span class="fa fa-edit"></span>
        Edit Surat Keluar Fee
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
                  $lampiran = $l['lampiran'];
                  $tujuan = $l['tujuan'];
                  $nama_tujuan = $l['nama_tujuan'];
                  $tgl_marketing = $l['tgl_marketing'];
                  $tgl_SuratKeluar = $l['tgl_SuratKeluar'];
                  $userid = $l['userid'];
                  $jenis_surat = $l['jenis_surat'];
                  $tembusan = $l['tembusan'];
                  }

                 if (!empty($ubahskeluar)){
                ?>
            <form action="<?= base_url('skeluar/gantiDataskeluar_fee') ?>" role="form" method="post">
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
                  <label>Jenis Surat</label>
                   <input class="form-control" value="<?= $jenis_surat ?>" placeholder="Enter ..." type="text" name="cjenissurat_update" id="cjenissurat_update" readonly="">
                </div>
                <div class="form-group">
                  <label>Nama Penerima</label>
                  <input class="form-control" value="<?= $nama_tujuan ?>" placeholder="Enter ..." type="text" name="namatujuan" required="" >
                </div>
                <div class="form-group">
                   <label>Tujuan Penerima</label>
                   <input class="form-control" value="<?= $tujuan ?>" type="text" name="tujuan" >
                </div>
                <div class="form-group">
                  <label>Lampiran</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="lampiran" value="<?= $lampiran ?>"  >
                </div>
                <div class="form-group">
                  <label>Tanggal Marketing</label>
                  <input class="form-control" placeholder="Enter ..." type="date" name="tgl_marketing" value="<?= $tgl_marketing ?>">
                </div>
                <div class="form-group">
                  <label>Tembusan</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="tbs_fee" value="<?= $tembusan ?>">
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
                  <table id="tblAddRow" width="100%" class="table table-bordered">
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
                    <?php  foreach($ubahskeluar as $l) { ?>
                        <tr>
                            <td><input name="ckcDel[]" type="checkbox" /></td>
                            <td><input name="sekolah[]" value="<?= $l['sekolah'] ?>" /></td>
                            <td><input name="mou[]" value="<?= $l['mou'] ?>"/></td>'
                            <td><input name="program[]" value="<?= $l['program'] ?>" size="5" /></td>
                            <td><input name="acc[]" value="<?= $l['acc'] ?>" size="3" /></td>
                            <td><input name="tdk_acc[]" value="<?= $l['tdk_acc'] ?>" size="3" /></td>
                            <td><input name="fee_siswa[]" value="<?= $l['fee_siswa'] ?>" size="10"/></td>
                            <td><textarea name="ket[]" cols="40" ><?= $l['ket'] ?></textarea><p><i>Jika ingin membuat baris baru(Enter) tambahkan <b>&lt;br&gt;</b> </i></p></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
                </div>
                </div></div></div>
                <?php }?>
                <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Kembali</a>
                <button type="submit" class="pull-right btn btn-success " id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->