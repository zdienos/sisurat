    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><span class="fa fa-edit"></span>
        Edit Surat Keluar Pengecekan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              <?php 
             $date =date('y-m-d');
                 if (!empty($ubahskeluar)){
                    foreach($ubahskeluar as $usk){ ?>
            <form action="<?= base_url('skeluar/gantiDataPengecekan') ?>" role="form" method="post">
               <!-- <input class="form-control" type="hidden" name="userid"  value="<?php echo $nama_lengkap.'-'.$jabatan?>"> -->
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
                  <input class="form-control" value="<?= $usk['perihal'] ?>" placeholder="Enter ..." type="text" name="prihal" required="" readonly="">
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
                </div>

            <!-- pengelommpokkan jenis surat -->
                    <div class="form-group">
                      <label>Cabang - Kota - Unit</label>
                      <input class="form-control" placeholder="Masukan cabang - kota - unit" type="text" name="cku" value="<?= $usk['cku'] ?>">
                    </div>
                    <div class="form-group">
                      <label>No Rekening</label>
                      <input class="form-control" placeholder="Masukan No Rekening" type="text" name="norektransfer" value="<?= $usk['norektrs'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Transfer</label>
                      <input class="form-control" placeholder="Masukan Tanggal Transfer" type="date" name="tgltransfer" value="<?= $usk['tgltransfer'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Nama Pentrnasfer</label>
                      <input class="form-control" placeholder="Masukan Nana Pentransfer" type="text" name="namatransfer" value="<?= $usk['namatransfer'] ?>">
                    </div>
                    <div class="form-group">
                      <label>No Rekening Pentransfer</label>
                      <input class="form-control" placeholder="Masukan No Rekening Pentransfer" type="text" name="norekpentransfer" value="<?= $usk['norekpentransfer'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Nominal Transfer</label>
                      <input class="form-control" placeholder="Masukan Nominal Transfer" type="text" name="nominal" value="<?= $usk['nominal'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Hasil Pengecekan</label>
                      <input class="form-control" placeholder="Masukan Hasil Pengecekan" type="text" name="hasil" value="<?= $usk['hasil'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Konfirmasi</label>
                      <input class="form-control" placeholder="Masukan Tanggal Konfirmasi" type="date" name="tglkonfirmasi" value="<?= $usk['tglkonfirmasi'] ?>">
                    </div>
                    <?php } } ?>
                </div>
               <button type="button" class="btn btn-primary" onclick="history.back();"> <i class="fa fa-mail-reply"></i> &nbsp&nbsp Kembali</button>
                <button type="submit" class="pull-right btn btn-success" id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->