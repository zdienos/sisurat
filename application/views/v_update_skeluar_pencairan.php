    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><span class="fa fa-edit"></span>
        Edit Surat Keluar Pencairan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box-body">
              <?php 
             $date =date('y-m-d');
                 if (!empty($ubahskeluar)){
                    foreach($ubahskeluar as $usk){ ?>
            <form action="<?= base_url('skeluar/gantiDataskeluar') ?>" role="form" method="post">
             <!--   <input class="form-control" type="hidden" name="userid"  value="<?php echo $nama_lengkap.'-'.$jabatan?>"> -->
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
                  <input class="form-control" value="<?= $usk['tujuan'] ?>" placeholder="Enter ..." type="text" name="tujuan" required="" >
                </div>
                <div class="form-group">
                  <label>Nama Tujuan</label>
                  <input class="form-control" value="<?= $usk['nama_tujuan'] ?>" placeholder="Enter ..." type="text" name="namatujuan" required="" >
                </div>

                <div class="form-group">
                  <label>Jenis Surat</label>
                   <input class="form-control" value="<?= $usk['jenis_surat'] ?>" placeholder="Enter ..." type="text" name="cjenissurat_update" id="cjenissurat_update" readonly="">
                </div>

            <!-- pengelommpokkan jenis surat -->
                <div id="TidakKuota">
                    <div class="form-group">
                      <label>Tanggal ACC Surat Marketing</label>
                      <input class="form-control" placeholder="Enter ..." type="date" name="tglmarketing"  id="TidakKuota" required="" value="<?= $usk['tgl_marketing'] ?>" >
                      <p><i>Jika Format Tanggal Tidak keluar, Input dengan manual dengan format <b> ("YYYY/MM/DD") </b> </i></p>
                    </div>
                    <div class="form-group">
                      <label>TindakLanjut Memo Bagian</label>
                      <input class="form-control" placeholder="Masukan TidakLanjut" type="text" name="tindaklanjut" id="TidakKuota" value="<?= $usk['tingaklanjut'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Unit</label>
                      <input class="form-control" id="TidakKuota" value="<?= $usk['unit'] ?>"  placeholder="Enter ..." type="text" required="" name="unit">
                    </div>
                    <div class="form-group">
                      <label>Nama Siswa</label>
                      <input class="form-control" id="TidakKuota" value="<?= $usk['nama_siswa'] ?>"  placeholder="Enter ..." type="text" required="" name="nama_siswa">
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <input class="form-control" id="TidakKuota" value="<?= $usk['kelas'] ?>" placeholder="Enter ..." type="text" required="" name="kelas">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Bayar yg Disetujui</label>
                      <input class="form-control" id="TidakKuota" value="<?= $usk['jumlahbayar'] ?>" placeholder="Enter ..." type="text" required="" name="jumlahbayar_pt">
                    </div>
                    <div class="form-group">
                      <label>Norek Siswa</label>
                      <input class="form-control" id="TidakKuota" value="<?= $usk['pengembaliannorek'] ?>" placeholder="Enter ..." type="text" required="" name="norek">
                      <p><i>Contoh: BRI <b>&lt;br&gt;</b> 0883 01 017263 530 <b>&lt;br&gt;</b> a.n Srimulyani | <b>&lt;br&gt;</b> untuk membuat baris baru (Enter)</i> </p>
                    </div>
                    <div class="form-group">
                      <label>Tembusan</label>
                      <input class="form-control" id="TidakKuota" value="<?= $usk['tembusan'] ?>" placeholder="Enter ..." type="text" required="" name="tembusan">
                      <p><i>Untuk memisahkan Tembusan beri tanda koma <b> (",") </b> tanpa spasi</i> </p>
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