    <section class="content-header">
      <h1><span class="fa fa-eye"></span>
        Data Surat Pencairan
        <small>Selamat Bekerja!</small>
      </h1>
    </section>
<section class="content">
      <div class="row">
      <div class="col-xs-12">
      <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <tbody>
                <?php 
                 if (!empty($lihat)){
                    foreach($lihat as $srt){ ?>
				  <tr><td>No Surat</td> <td><?php echo $srt['no'] .'/'. $srt['no_surat'];?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $srt['perihal']; ?></td> </tr>
                  <tr><td>Nama Tujuan</td> <td><?= $srt['nama_tujuan']; ?></td></tr>
                  <tr><td>Tujuan</td>  <td><?= $srt['tujuan'] ?></td></tr>
                  <tr><td>Jenis Surat</td> <td><?= $srt['jenis_surat'] ?></td></tr>
                  <tr><td>Tanggal Marketing</td><td><?= $srt['tgl_marketing']; ?></td></tr>
                  <tr><td>Unit</td><td><?= $srt['unit']; ?></td></tr>
                  <tr><td>Nama Siswa</td><td><?= $srt['nama_siswa']; ?></td></tr>
                  <tr><td>Kelas</td><td><?= $srt['kelas']; ?></td></tr>
                  <tr><td>ACC Marketing</td><td><?= $srt['jumlahbayar']; ?></td></tr>
                  <tr><td>Keterangan</td><td><?= $srt['pengembaliannorek']; ?></td></tr>
                  <tr><td>Tembusan</td><td><?= $srt['tembusan']; ?></td></tr>
                  <tr><td>Tanggal Input</td><td><?= $srt['tgl_SuratKeluar']; ?></td></tr>
                  <tr><td>Yang Membuat</td> <td><?= $srt['userid'];?></td></tr>
                </tbody>
                    <?php 
                        }
                    } ?>
                </tbody>
              </table><br>
              <button type="button" class="btn btn-primary" onclick="history.back();"> <i class="fa fa-mail-reply"></i> &nbsp&nbsp Kembali</button>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

