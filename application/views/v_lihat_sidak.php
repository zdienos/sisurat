    <section class="content-header">
      <h1>
        Data Surat Sidak
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
                 if (!empty($lihat)){
                    foreach($lihat as $srt){ ?>
				          <tr><td>No Surat</td> <td><?php echo $srt['no'] .'/'. $srt['no_surat'];?></td> </tr>
                  <tr><td>Perihal</td> <td><?= $srt['perihal']; ?></td> </tr>
                  <tr><td>Nama Penerima</td> <td><?= $srt['nama_penerima']; ?></td></tr>
                  <tr><td>Tujuan Penerima</td>  <td><?= $srt['tujuan_penerima'] ?></td></tr>
                  <tr><td>Tanggal Sidak</td><td><?= $srt['tgl_sidak']; ?></td></tr>
                  <tr><td>Petugas Sidak</td><td>
                    <table>
                    <?php 
                    $nama_petugas = explode(",", $srt['petugas_sidak']);
                    $no=1;
                    foreach ($nama_petugas as $nama) {
                      $n = explode("-", $nama);
                    ?>
                        <tr>
                          <td><?= $no.'.' ?></td>
                          <td>&nbsp&nbsp<?= $n[0]?></td>
                          <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                          <td><dd><?= $n[1];?></dd></td>
                        </tr>
                    <?php  $no++;} ?>
                      </table></td>
                  </tr>
                  <tr><td>Tugas Sidak</td><td><?= $srt['tugas_sidak']; ?></td></tr>
                  <tr><td>Tembusan</td><td><?= $srt['tembusan']; ?></td></tr>
                  <!-- <tr><td>Tanggal Input</td><td><?= $srt['tgl_SuratKeluar']; ?></td></tr> -->
                  <!-- <tr><td>Yang Membuat</td> <td><?= $srt['userid'];?></td></tr> -->
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

