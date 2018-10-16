    <section class="content-header">
      <h1>
        Surat Masuk
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              
            <form action="<?= base_url('Smasuk/masukandata')?>" role="form" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>No Surat</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="nosurat" id="nosurat" required="">
                </div>
                <div class="form-group">
                  <label>Hal</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="hal" id="hal" required="">
                </div>
                <div class="form-group">
                  <label>Kepada</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="kepada" id="kepada" required="">
                </div>
                <div class="form-group">
                  <label>Dari</label>
                  <input class="form-control" placeholder="Enter ..." type="text" name="dari" id="dari" required="">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="keterangan" id="keterangan" required=""></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input class="form-control" placeholder="Enter ..." type="date" name="tanggal" id="tanggal" required="">
                </div>
                <button type="submit" name="savesm" class="pull-right btn btn-default" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
  </div>