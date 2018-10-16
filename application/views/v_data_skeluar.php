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
                <thead>
                <tr>
                  <th>No Surat</th>
                  <th>Prihal</th>
                  <th>Tujuan</th>
                  <th>Nama Tujuan</th>
                  <th>Jenis Surat</th>
                </tr>
                </thead>
                <tbody>
                   <?php 
                   
                    if (!empty($skeluar)){
                    foreach($skeluar as $srt){ ?>

                        <tr>
                          <td><?php echo $srt->no ."/". $srt->no_surat;?></td>
                          <td><?= $srt->perihal; ?></td>
                          <td><?= $srt->tujuan; ?></td>
                          <td><?= $srt->nama_tujuan; ?></td>
                          <td><?= $srt->jenis_surat; ?></td>
                          <td><?= $srt->tgl_SuratKeluar; ?></td>
                          <td>
                          <?php 
                          if($jabatan == "kasi"){ ?>
                            <a href="<?= base_url('Skeluar/ubahDataskeluar/'). $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar/') . $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-primary">Lihat</a>
                            <a href="<?= base_url('Skeluar/hapusDatasuratkeluar/') . $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-danger" onClick='myFunction()'>Delete</a>
                            <a href="<?= base_url('Skeluar/cetaksuratkeluar/') . $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-primary">Cetak</a>
                          <?php } else{ ?>
                            <a href="<?= base_url('Skeluar/ubahDataskeluar/'). $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar/') . $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-primary">Lihat</a>
                            <a href="<?= base_url('Skeluar/cetaksuratkeluar/') . $srt->no.'/'. $srt->jenis_surat ?>" class="btn btn-primary">Cetak</a>
                          </td>
                        </tr>

                    <?php 
                       } } 
                    } else { ?>

                    <tr>
                      <td colspan="7" class="text-center">tidak ada data</td>
                    </tr>

                    <?php
                    } ?>
                </tbody>
              </table>
              <a href="<?= base_url('Skeluar/index/')?>" class="btn btn-primary">Buat Surat</a>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
    </section>

