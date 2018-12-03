    <section class="content-header">
      <h1><span class="fa fa-eye"></span>
        Data Surat Teguran
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
                  <!-- <tr><td>Pemeriksa</td><td><?= $srt['pemeriksa']; ?></td></tr> -->
                  <!-- <tr><td>Bagian yang menegur</td><td><?= $srt['bgn_tegur']; ?></td></tr> -->
                  <tr><td>Teguran</td><td><?php
                    $tbs = explode("^",$srt['teguran']);
                    foreach ($tbs as $t) { 
                       $sub_tbs = explode("#",$t);
                    ?>
                    <li><?php echo $sub_tbs[0]; 
                    $y = count($sub_tbs) - 1;
                    for($i=1; $i <= $y;$i++){
                    ?> <br>
                    <?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-  ".$sub_tbs[$i]; ?>
                  </li>
                  <?php } }
                    ?>
                  </td></tr>
                  <!-- <tr><td>Penutup</td><td><?= $srt['penutup']; ?></td></tr> -->
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

