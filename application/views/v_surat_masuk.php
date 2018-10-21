    <section class="content-header">
      <h1>
        Surat Masuk
      </h1>
    </section>
    <?php $date = date("Y-m-d");?>
    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('Smasuk/masukandata')?>" role="form" method="post">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="tgl_input" required="" value="<?= $date ?>">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="userid" required="" value="<?= $username; ?>">
                <!-- text input -->
                <div class="form-group">
                  <label>No Surat</label>
                  <input class="form-control" placeholder="Masukan No Surat" type="text" name="nosurat" id="nosurat" required="">
                </div>
                <div class="form-group">
                  <label>Perihal</label>
                  <input class="form-control" placeholder="Masukan Perihal" type="text" name="hal" id="hal" required="">
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
                  <input class="form-control" placeholder=YYYY-MM-DD" type="date" name="tanggal" id="tanggal" required="">
                  <p><i>Jika Format Tanggal Tidak keluar Input dengan manual dengan format <b> ("2018/12/30") </b> <i></p>
                </div>
                <button type="submit" name="savesm" class="pull-right btn btn-app" id="savesm">
                <i class="fa fa-save"></i>save</button>
            </form>
                
      </div>         
    </section>
