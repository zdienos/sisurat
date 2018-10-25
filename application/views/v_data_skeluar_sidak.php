    <section class="content-header">
      <h1> <span class="fa fa-line-chart"></span>
        Data Surat Keluar 
        <small>Selamat Bekerja!</small>
      </h1>
    </section>

<section class="content">
   <div class="panel panel-default">
            <div class="panel-body">
              <a href="<?= base_url('Skeluar/index/')?>" class="btn btn-primary"><span class="fa fa-plus-circle"></span> Buat Surat</a>
              <div class="col-md-4 pull-right">
                <form action="<?php echo site_url('Skeluar/search_sidak') ?>" method="get">
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
              <?php if($jabatan == "Kasie Keuangan"){?>
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
                  <th style="width: 15%;">Tujuan</th>
                  <th style="width: 15%;">Nama Tujuan</th>
                  <th style="width: 10%;">Tanggal Sidak</th>
                  <th style="width: 25%;"align="center"><span class="fa fa-gears"></span></th>
                </tr>
                </thead>
                <tbody>
                    <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
                    <?php 
                    if (!empty($sidak)){
                    foreach($sidak as $srt){ ?>

                        <tr>
                          <td><?php echo $srt->no ."/". $srt->no_surat;?></td>
                          <td><?= $srt->perihal; ?></td>
                          <td><?= $srt->tujuan_penerima; ?></td>
                          <td><?= $srt->nama_penerima; ?></td>
                          <td><?= $srt->tgl_sidak; ?></td>
                          <td>
                            <a href="<?= base_url('Skeluar/ubahsuratkeluar_sidak/'). $srt->no?>" class="btn btn-success btn-sm"><span class="fa fa-edit"></span> Edit</a>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar_sidak/') . $srt->no ?>" class=" btn btn-primary btn-sm"> <span class="fa fa-eye"></span> Lihat</a>
                            <a href="<?= base_url('Skeluar/hapusDatasuratkeluar_sidak/') . $srt->no?>" class=" btn btn-danger btn-sm" onClick="return doconfirm();"> <span class="fa fa-remove"></span> Delete</a>
                            <a href="<?= base_url('Skeluar/cetak_sidak/') . $srt->no?>" class="btn btn-info btn-sm"> <span class="fa fa-print"></span> &nbspCetak</a>
                          </td>
                        </tr>

                    <?php 
                       } 
                    } else { ?>

                    <tr>
                      <td colspan="7" class="text-center">tidak ada data</td>
                    </tr>

                    <?php
                    } 
                  ?>
                </tbody>
              </table> 

               <?php echo $paging_sidak ?>
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