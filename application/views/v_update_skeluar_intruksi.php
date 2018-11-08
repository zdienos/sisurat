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
            <form action="<?= base_url('skeluar/gantiDataIntruksi') ?>" role="form" method="post">
               <input class="form-control" type="hidden" name="userid"  value="<?php echo $nama_lengkap.'-'.$jabatan?>">
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
                      <input class="form-control" placeholder="Masukan cabang - kota - unit" type="text" name="ckuitf" value="<?= $usk['ckuitf'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Pembayaran dari Siswa</label>
                      <input class="form-control" placeholder="Masukan Pembayaran dari siswa" type="text" name="pembayaransiswa" value="<?= $usk['pembayaransiswa'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Kuitansi yang Di Setor</label>
                      <input class="form-control" placeholder="Masukan Kuitansi yang Di Setor" type="text" name="kuitansisetor" value="<?= $usk['kuitansisetor'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal laporan Pembayaran</label>
                      <input class="form-control" placeholder="Masukan Tanggal laporan Pembayaran" type="date" name="tgl_lappem" value="<?= $usk['tgl_lappem'] ?>">
                    </div>
                    <div class="form-group">
                      <label>No Kuitansi</label>
                      <input class="form-control" placeholder="Masukan No Kuitansi" type="text" name="nokuitansi" value="<?= $usk['nokuitansi'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Petugas Kuitansi</label>
                      <input class="form-control" placeholder="Masukan Petugas Kuitansi" type="text" name="petugas_kuitansi" value="<?= $usk['petugas_kuitansi'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Wajib Setor</label>
                      <input class="form-control" placeholder="Masukan Tanggal Wajib Setor" type="date" name="tgl_waset" value="<?= $usk['tgl_waset'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Tanggapan Tertulis</label>
                      <input class="form-control" placeholder="Masukan Tanggal Tanggapan Tertulis" type="date" name="tgl_tanter" value="<?= $usk['tgl_tanter'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" placeholder="Masukan Tembusan" type="text" name="tbsintriksi" value="<?= $usk['tembusan'] ?>">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i></p>
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