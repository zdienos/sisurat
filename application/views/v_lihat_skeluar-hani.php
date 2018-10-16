    <section class="content-header">
      <h1>
        Data Surat Keluar
        <small>advanced tables</small>
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
                print_r($lihat);
                 if (!empty($lihat)){
                    foreach($lihat as $srt){ ?>
				          <tr><td>No Surat</td> <td><?php echo $srt['no'] .'/'. $srt['no_surat'];?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $srt['perihal']; ?></td> </tr>
                  <tr><td>Nama Tujuan</td> <td><?= $srt['nama_tujuan']; ?></td></tr>
                  <tr><td>Tujuan</td>  <td><?= $srt['tujuan'] ?></td></tr>
                  <tr><td>Jenis Surat</td> <td><?= $srt['jenis_surat'] ?></td></tr>
                  <tr><td>Tanggal</td><td><?= $srt['tgl_SuratKeluar']; ?></td></tr>
                  <tr><td>User</td> <td><?= $srt['userid'];?></td></tr>
                  <tr><td>Nama Siswa</td><td><?= $srt['nama_siswa']; ?></td></tr>
                  <tr><td>Kelas</td><td><?= $srt['kelas']; ?></td></tr>
                  <tr><td>Jumlah Bayar</td><td><?= $srt['jumlahbayar']; ?></td></tr>
                  <tr><td>No Rekening</td><td><?= $srt['pengembaliannorek']; ?></td></tr>
                  <tr><td>Tembusan</td><td><?= $srt['tembusan']; ?></td></tr>
                </tbody>
                    <?php 
                        }
                    } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

