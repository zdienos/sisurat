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
                  <tr><td>Cabang - kota - Unit</td><td><?= $srt['cku']; ?></td></tr>
                  <tr><td>No Rekening GO</td><td><?= $srt['norektrs']; ?></td></tr>
                  <tr><td>Tgl Transfer</td><td><?= $srt['tgltransfer']; ?></td></tr>
                  <tr><td>Nama Pentransfer</td><td><?= $srt['namatransfer']; ?></td></tr>
                  <tr><td>No Rek Pentransfer</td><td><?= $srt['norekpentransfer']; ?></td></tr>
                  <tr><td>Nominal Transfer</td><td><?= $srt['nominal']; ?></td></tr>
                  <tr><td>Hasil Pengecekan</td><td><?= $srt['hasil']; ?></td></tr>
                  <tr><td>Tanggal Konfirmasi</td><td><?= $srt['tglkonfirmasi']; ?></td></tr>
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

