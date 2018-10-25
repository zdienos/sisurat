    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Surat Keluar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              <?php 
             $date =date('y-m-d');
                 if (!empty($ubahskeluar)){
                    foreach($ubahskeluar as $usk){ ?>
            <form action="<?= base_url('skeluar/gantiDatasidak') ?>" role="form" method="post">
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
                <label>Perihal</label>
                <input class="form-control" placeholder="Masukan Perihal" type="text" name="perihal_sidak" value="<?= $usk['perihal'] ?>">
              </div>
              <div class="form-group">
                <label>Nama Penerima</label>
                <input class="form-control" placeholder="Masukan Nama Penerima" type="text" name="namapenerima_sidak" value="<?= $usk['nama_penerima'] ?>">
              </div>
               <div class="form-group">
                 <label>Tujuan Penerima</label>
                 <input class="form-control" placeholder="Masukan Tujuan Penerima" type="text" name="tujuan_sidak" value="<?= $usk['tujuan_penerima']?>">
              </div>
             <div class="form-group">
              <label>Tanggal Sidak</label>
              <input class="form-control" type="date" name="tgl_sidak" value="<?= $usk['tgl_sidak']?>" placeholder="Masukan Tanggal dengan format ('YYYY/MM/DD')">
              <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
            </div>
            <div class="form-group">
              <label>Petugas Sidak - Jabatan Petugas Sidak</label>
              <input class="form-control" type="text" name="petugas_sidak" value="<?= $usk['petugas_sidak']?>" placeholder="Masukan Nama Petugas Sidak & Jabatan Sidak">
              <ul><li><i>Pisahkan Nama Petugas dengan Jabatan dengan Strip <b>"-"</b></i></li>
              <li><i>Jika Nama Petugas lebih dari satu pisahkan dengan Koma<b>","</b></i></p></li></ul>
            </div>
            <div class="form-group">
              <label>Tugas Sidak</label>
              <input class="form-control" placeholder="Masukan Tugas Sidak" type="text" name="tugas_sidak" value="<?= $usk['tugas_sidak']?>">
            </div>
            <div class="form-group">
              <label>Tembusan</label>
              <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tembusan_sidak" value="<?= $usk['tembusan']?>">
              <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
            </div>
                <a href="<?= base_url('Skeluar/data_table/') ?>" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Kembali</a>
                <button type="submit" class="pull-right btn btn-success" id="">Save
                <i class="fa fa-arrow-circle-right"></i></button>
            </form>
          <?php } }?>
      </div>        
    </section>
    <!-- /.content -->