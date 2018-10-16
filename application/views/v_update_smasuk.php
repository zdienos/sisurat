    <section class="content-header">
      <h1>
        Edit Surat Masuk
      </h1>
    </section>
<?php $date = Date('d-m-y');?>
    <!-- Main content -->
    <section class="content">
      <div class="box-body">
            <form action="<?= base_url('Smasuk/gantiDatasmasuk')?>" role="form" method="post">
                <!-- text input -->
                <input class="form-control" placeholder="Enter ..." type="hidden" name="id" id="nosurat" required="" value="<?= $ubahsurat['id'] ?>">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="tgl_input" required="" value="<?= $date ?>">
                <input class="form-control" placeholder="Enter ..." type="hidden" name="userid" required="" value="<?= $username ?>">

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
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="keterangan" id="keterangan" required="" ><?= $ubahsurat['keterangan'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Tanggal Surat</label>
                  <input class="form-control" placeholder="Enter ..." type="date" name="tanggal" id="tanggal" required="" value="<?= $ubahsurat['tanggal'] ?>">
                </div>
                <button type="submit" name="savesm" class="pull-right btn btn-default" id="savesm">save 
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
                
      </div>         
    </section>
    <!-- /.content -->
  </div>