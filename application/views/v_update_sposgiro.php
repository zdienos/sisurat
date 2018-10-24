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
            <form action="<?= base_url('skeluar/gantiDatasposgiro') ?>" role="form" method="post">
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
                  <input class="form-control" value="<?= $usk['perihal'] ?>" placeholder="Enter ..." type="text" name="prihal" required="" readonly="">
                </div>
                <div class="form-group">
                  <label>Tujuan</label>
                  <input class="form-control" value="<?= $usk['tujuan'] ?>" placeholder="Enter ..." type="text" name="tujuan" required="" readonly="">
                </div>
                <div class="form-group">
                  <label>Nama Tujuan</label>
                  <input class="form-control" value="<?= $usk['nama_tujuan'] ?>" placeholder="Enter ..." type="text" name="namatujuan" required="" readonly="">
                </div>

                <div class="form-group">
                  <label>Jenis Surat</label>
                   <input class="form-control" value="<?= $usk['jenis_surat'] ?>" placeholder="Enter ..." type="text" name="cjenissurat_update" id="cjenissurat_update" readonly="">
                </div>

            <!-- pengelommpokkan jenis surat -->
                <div id="TidakKuota">
                  <div class="form-group">
                  <label>Periode Pengiriman</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="periode"required="" value="<?= $usk['periodepengiriman'] ?>" >
                </div>
                    <div class="form-group">
                      <label>Total Tagihan</label>
                      <input class="form-control"value="<?= $usk['totaltagihan'] ?>"  placeholder="Enter ..." type="text" required="" name="totaltagihan">
                    </div>
                    <div class="form-group">
                      <label>Norek</label>
                      <input class="form-control" value="<?= $usk['norek'] ?>" placeholder="Enter ..." type="text" required="" name="norek">
                    </div>
                    <?php } } ?>
                </div>
                <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Kembali</a>
                <button type="submit" class="pull-right btn btn-success" id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
      </div>        
    </section>
    <!-- /.content -->