    <section class="content-header">
      <h1><span class="fa fa-edit"></span>
        Edit Surat Masuk
      </h1>
    </section>
<?php $date = Date('d-m-y');?>
    <!-- Main content -->
    <section class="content">
      <div class="box-body">

            <form action="<?= base_url('Smasuk/gantiDatasmasuk')?>" role="form" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <input class="form-control" placeholder="Enter ..." type="hidden" name="id" id="nosurat" required="" value="<?= $ubahsurat['id'] ?>">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="tgl_input" required="" value="<?= $date ?>">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="userid" required="" value="<?= $username ?>">
                <div class="form-group">
                      <label>Jenis Surat Masuk</label>
                      <select class="form-control" name="jenissurat">
                        <option value="Email" <?php if ($ubahsurat['jenissurat'] == "Email") echo "selected";?>>Email</option>
                        <option value="Ekspedisi" <?php if ($ubahsurat['jenissurat'] == "Ekspedisi") echo "selected";?> >Ekspedisi</option>
                      </select>
                </div>
                 <div class="form-group">
                  <label>Bagian Pengirim</label>
                   <select name="bagian_pengirim" id="bagian_pengirim" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required=""> 
                      <option hidden="true" selected>Pilih Bagian Pengirim</option>
                      <option value="Lain-lain" >Lain-lain</option>
                      <?php foreach ($perihal as $l ) {?>
                      <option value="<?= $l->bagian_pengirim ?>" <?php if($l->bagian_pengirim  == $ubahsurat['bagian_pengirim'])  echo "selected" ?>><?= $l->bagian_pengirim?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Surat</label>
                  <select class='jenissurat form-control'>
                    <select name="jenis_pokok_surat" id="bagian_pengirim" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required=""> 
                      <option hidden="true" selected>Pilih Jenis Surat</option>
                     <!--  <?php foreach ($perihal as $l ) {?>
                      <option value="<?= $l->jenissurat ?>" <?php if($l->jenissurat  == $ubahsurat['jenissurat'])  echo "selected" ?>><?= $l->jenissurat?></option>
                       <?php }?>
 -->                    </select>
                </div>
                <div class="form-group">
                  <label>No Surat</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="nosurat" id="nosurat" required="" value="<?= $ubahsurat['no_surat'] ?>">
                </div>
                <div class="form-group">
                  <label>Hal</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="hal" id="hal" required="" value="<?= $ubahsurat['hal'] ?>">
                </div>
                <div class="form-group">
                  <label>Kepada</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="kepada" id="kepada" required="" value="<?= $ubahsurat['kepada'] ?>">
                </div>
                <div class="form-group">
                  <label>Dari</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="dari" id="dari" required="" value="<?= $ubahsurat['dari'] ?>">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="keterangan" id="keterangan" required="" ><?= $ubahsurat['keterangan']?></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal Surat</label>
                  <input class="form-control" placeholder="Enter ..." type="date" name="tanggal" id="tanggal" required="" value="<?= $ubahsurat['tanggal'] ?>">
                </div>
                <div class="form-group">
                  <label>Arsip Surat</label><bR>
                  <label><a href="<?= base_url('assets/arsip/').$ubahsurat['arsip'] ;?>"><?= $ubahsurat['arsip']?> </a></label>
                  <input placeholder="Masukan Cabang" type="file" name="update_arsip">
                  <input type="hidden" name="arsip" value="<?= $ubahsurat['arsip']; ?>" readonly></td>
                </div>
                <button type="button" class="btn btn-primary" onclick="history.back();"> <i class="fa fa-mail-reply"></i> &nbsp&nbsp Kembali</button>
                <button type="submit" name="savesm" class="pull-right btn btn-success" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
  </div>