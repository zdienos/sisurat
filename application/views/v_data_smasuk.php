    <section class="content-header">
      <h1><span class="fa fa-line-chart"></span>
        Data Surat Masuk
        <small>Selamat Bekerja!</small>
      </h1>
    </section>
    <?php $jabat = explode(" ", $jabatan);
?>
<section class="content">
          <div class="panel panel-default">
            <div class="panel-body">
               <a href="<?= base_url('Smasuk/index/')?>" class="btn btn-primary"><span class="fa fa-plus-circle"></span>  Buat Surat</a>
              <div class="col-md-4 pull-right">
                <form action="<?php echo site_url('Smasuk/search') ?>" method="get">
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
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><span class="icon fa fa-check"></span><?=$this->session->flashdata('success')?></h4>
            </div>
          <?php } ?>

      <div class="row">
      <div class="col-xs-12">
      <div class="box">

            <div class="box-header">
              <h3 class="box-title"><span class="fa fa-files-o"></span> Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 2%;">No Surat</th>
                  <th style="width: 8%;">Hal</th>
                  <th style="width: 6%;">Kepada</th>
                  <th style="width: 6%;">Dari</th>
                  <th style="width: 20%;">Keterangan</th>
                  <th style="width: 7%;">Tanggal Surat</th>
                  <th style="width: 17%;">Button</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    if (!empty($link)){
                    foreach($link as $srt){ ?>

                        <tr>
                          <td><?= $srt->no_surat; ?></td>
                          <td><?= $srt->hal; ?></td>
                          <td><?= $srt->kepada; ?></td>
                          <td><?= $srt->dari; ?></td>
                          <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= 
                          $sub_kalimat = substr($srt->keterangan,0,100);
                          echo $sub_kalimat;
                          ?></td>
                          <td><?= $srt->tanggal; ?></td>
                          <td>
                          <?php if($jabat[0] == "Kasie"){ ?>
                          <a href="<?= base_url('Smasuk/ubahdatasmasuk/') . $srt->id ?>" class="btn-sm btn btn-success"><span class="fa fa-edit"></span> Edit</a>
                          <a href="<?= base_url('Smasuk/lihatsuratmasuk/') . $srt->id ?>" class="btn-sm btn btn-primary"><span class="fa fa-eye"></span> Lihat</a>
                          <a href="<?= base_url('Smasuk/hapusDatasuratmasuk/') . $srt->id.'/'.$srt->arsip ?>" class="btn-sm btn btn-danger"  onClick="return doconfirm();"><span class="fa fa-trash-o"></span> Delete</a>
                          <?php if ($srt->arsip != ""){?>
                          <a href="<?= site_url('assets/arsip/') .$srt->arsip ?>" class="btn-sm btn btn-warning"><span class="fa fa-file-o"></span> &nbsp Arsip</a>
                        <?php } ?>
                          <?php }  else{?>
                           <a href="<?= base_url('Smasuk/ubahdatasmasuk/') . $srt->id ?>" class="btn-sm btn btn-success"><span class="fa fa-edit"></span> Edit</a>
                          <a href="<?= base_url('Smasuk/lihatsuratmasuk/') . $srt->id ?>" class="btn-sm btn btn-primary"><span class="fa fa-eye"></span> Lihat</a>
                          <?php if ($srt->arsip != ""){?>
                          <a href="<?= site_url('assets/arsip/').$srt->arsip ?>" class="btn-sm btn btn-warning"><span class="fa fa-file-o"></span> &nbsp Arsip</a>
                        <?php } ?>

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
               <?php echo $paging ?>
            </div>
            <!-- /.box-body -->
        </div>
<!-- cols -->
      </div>
    </div>
      <!-- /.row -->
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