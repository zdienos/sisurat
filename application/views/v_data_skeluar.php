<section class="content-header">
      <h1><span class="fa fa-line-chart"></span>
        Data Surat Keluar
        <small>Selamat Bekerja!</small>
      </h1>
    </section>
<?php $jabat = explode(" ", $jabatan);
?>
<section class="content">
  <div class="panel panel-default">
            <div class="panel-body">
              <a href="<?= base_url('Skeluar/index/')?>" class="btn btn-primary"><span class="fa fa-plus-circle"></span> Buat Surat</a>
              <div class="col-md-4 pull-right">
                <form action="<?php echo site_url('Skeluar/search') ?>" method="get">
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="keyword">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="fa fa-search"></span> Cari</button>
                      </span>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><span class="icon fa fa-check"></span><?=$this->session->flashdata('success')?></h4>
            </div>
          <?php } ?>

      <div class="row">
      <div class="col-xs-12">
      <div class="box">

            <div class="box-header">

              <a href="<?= base_url('Skeluar/data_table/')?>" class="btn btn-default">Data Surat</a>
              <?php if($jabat[0] == "Kasie"){?>
                  <a href="<?= base_url('Skeluar/data_table_sidak/')?>" class="btn btn-default">Data Sidak</a>
              <?php }?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10%;">No Surat</th>
                  <th style="width: 15%;">Prihal</th>
                  <th style="width: 10%;">Tujuan</th>
                  <th style="width: 15%;">Nama Tujuan</th>
                  <th style="width: 10%;">Jenis Surat</th>
                  <th style="width: 8%;">Tanggal Surat</th>
                  <th style="width: 8%;">Status Surat</th>
                  <?php if ($jabat[0] == 'Kasie') {?>
                  <th style="width: 10%;"align="center">Ganti Status</th>
                  <?php } ?>
                  <th style="width: 25%;"align="center"><span class="fa fa-gears"></span></th>
                  
                </tr>
                </thead>
                <tbody>
                    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
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
                          <td><?= str_replace("%20", " ", $srt->status); ?></td>
                          <?php 
                            if($jabat[0] == "Kasie"){ ?>
                          <td>
                            <a href="<?= base_url('Skeluar/gantistatus/'). $srt->no.'/ACC' ?>" class="btn btn-success btn-sm" title="ACC"><span class="fa fa-check"></span></a>
                            <a href="<?= base_url('Skeluar/gantistatus/') . $srt->no.'/Tidak ACC' ?>" class=" btn btn-danger btn-sm" title="Tidak ACC"><span class="fa fa-remove"></span></a>
                            <a href="<?= base_url('Skeluar/gantistatus/') . $srt->no.'/Proses' ?>" class=" btn btn-danger btn-sm" title="Proses"><span class="fa fa-gears"></span></a>
                          </td>
                          <?php } ?>  
                          <td>
                          <?php 
                            if($jabat[0] == "Kasie"){ 
                              ?>
                            <a href="<?= base_url('Skeluar/ubahDataskeluar/'). $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn btn-success btn-sm" title="Edit"><span class="fa fa-edit" style=""></span></a>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class=" btn btn-primary btn-sm" title="Lihat"><span class="fa fa-eye"></span></a>
                            <a href="<?= base_url('Skeluar/hapusDatasuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class=" btn btn-danger btn-sm" onClick="return doconfirm();" title="Hapus"><span class="fa fa-trash-o"></span> </a>
                            <a href="<?= base_url('Skeluar/cetaksuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn btn-info btn-sm" title="Cetak"><span class="fa fa-print"></span > </a>
                          <?php } else{ 
                            if($srt->status == "Proses"){ ?>
                            <a href="<?= base_url('Skeluar/ubahDataskeluar/'). $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn-sm btn btn-success"><span class="fa fa-edit"></span> Edit</a> 
                            <?php } ?>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn-sm btn btn-primary"><span class="fa fa-eye"></span> Lihat</a>
                            <a href="<?= base_url('Skeluar/cetaksuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn-sm btn btn-info"><span class="fa fa-print"></span>
                          </td>
                        </tr>

                    <?php 
                       } } 
                    } else { ?>

                    <tr>
                      <td colspan="7" class="text-center">tidak ada data</td>
                    </tr>

                    <?php
                    } 
                  ?>
                </tbody>
              </table> 

               <?php echo $paging ?>
            </div>
            <!-- /.box-body -->
</div>
<!-- cols -->
</div>
      </div>
      <!-- /.row -->
        <!-- /.col -->
    </section>



 <script>
      function doconfirm() {
        x = confirm("Are you sure to delete permanently?");
          if(x!=true)
          {
            return false;
          }
        }
    </script>