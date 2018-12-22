<!-- <script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.min.js') ?>"></script> -->



    <section class="content-header">
      <h1><span class="fa fa-envelope"></span>
        Surat Masuk
      </h1>
    </section>
    <?php $date = date("Y-m-d"); // print_r($perihal); //exit();?>
    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('Smasuk/masukandata')?>" role="form" method="post" enctype="multipart/form-data">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="tgl_input" required="" value="<?= $date ?>">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="userid" required="" value="<?= $username; ?>">
                <!-- text input -->
                <div class="form-group">
                  <label>Jenis Kiriman Surat</label>
                    <select name="jeniskiriman" class="form-control"> 
                       <option hidden="true" selected>Pilih</option>
                       <option value="Email">Email</option>
                       <option value="Ekspedisi">Ekspedisi</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Bagian Pengirim</label>
                   <select name="bagian_pengirim" id="bagian_pengirim" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required=""> 
                      <option hidden="true" selected>Pilih Bagian Pengirim</option>
                      <?php foreach ($perihal as $l ) {?>
                      <option value="<?= $l->bagian_pengirim ?>"><?= $l->bagian_pengirim?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jenis Surat</label>
                  <select class='jenissurat form-control' name='jenissurat'>
                      <option value='0'>--pilih--</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>No Surat</label>
                  <input class="form-control" placeholder="Masukan No Surat" type="text" name="nosurat" id="nosurat" required="">
                </div>
                <div class="form-group">
                  <label>Perihal</label>
                  <input class="form-control" placeholder="Masukan Perihal" type="text" name="hal" id="hal" required="">
                   <!-- <select name="hal" id="prihal_fee" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" required=""> 
                    <option hidden="true" selected>Pilih Perihal</option>
                    <?php foreach ($perihal as $l ) {?>
                      <option value="<?= $l->perihal ?>"><?= $l->perihal?></option>
                    <?php }?>
                  </select> -->
                </div>
                <div class="form-group">
                  <label>Penerima</label>
                  <input class="form-control" placeholder="Masukan Penerima" type="text" name="kepada" id="kepada" required="">  
                  <p><i>Contoh : Bapak/Ibu ... - Bagian ... </i></p>
                </div>
                <div class="form-group">
                  <label>Pengirim</label>
                  <input class="form-control" placeholder="Masukan Pengirim" type="text" name="dari" id="dari" required="">
                  <p><i>Contoh : Bapak/Ibu ... - Kepala Cabang ... </i></p>
                </div>
                <div class="form-group">
                  <label>Isi Pokok Surat</label>
                  <textarea class="form-control" rows="3" placeholder="Masukan Isi Surat" name="keterangan" id="keterangan" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal Surat</label>
                  <input class="form-control"  placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')" type="date" name="tanggal" id="tanggal" required="">
                  <p><i>Jika Format Tanggal Tidak keluar Input dengan manual dengan format <b> ("yyyy/mm/dd")</b></i></p>
                </div>
                <div class="form-group">
                  <label>Upload Surat</label>
                 <input type="file" name="upload_surat" />
                </div>
                
                <button type="submit" name="savesm" class="pull-right btn btn-primary" id="savesm"><span class="fa fa-save"></span> save</button>
            </form>
                
      </div>         
    </section>
