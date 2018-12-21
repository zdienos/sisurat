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
              <a href="<?= base_url('Skeluar/export')?>" class="btn btn-primary"><span class="fa fa-print"></span> Eksport Surat Teguran To Excel</a>
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
          <div class="panel panel-default">
            <div class="panel-body">
              <form action="<?php echo site_url('Skeluar/filter') ?>" method="get">
                <div class="col-md-2">
                <label>Status Surat</label>
                  <div class="input-group input-group">
                    <select class="form-control" name="status">
                      <option hidden="true" selected>Pilih Status</option>
                      <option value="ACC">ACC</option>
                      <option value="Proses">Proses</option>
                      <option value="Tidak%20ACC">Tidak ACC</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-group input-group">
                   <label>Perihal</label>
                    <select name="prihal" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option hidden="true" selected>Pilih Perihal</option>
                    <?php 
                      if ($jabat[0] == "Kasie") { ?>
                      <option value="Transfer"> Surat Transfer Pencairan </option>
                      <option value="Pembayaran">Surat Pembayaran Ekspedisi Pengiriman Barang POS GIRO</option>
                      <option value="Sidak">Surat Sidak</option>
                    <?php } ?>
                      <option value="Surat Teguran">Surat Teguran</option>
                      <option value="Surat Peringatan">Surat Peringatan</option>
                      <option value="Surat Pengecekan">Surat Pengecekan</option>
                      <option value="Surat Intruksi">Surat Intruksi Transfer Kekurangan Storan</option>
                      <option value="Surat ACC Pencairan PT Kolektif">Surat ACC Pencairan PT Kolektif</option>
                      <option value="Surat ACC Pencairan Fee Bimker">Surat ACC Pencairan Fee Bimker</option>
                      <option value="Surat ACC Pengembalian Psikotes">Surat ACC Pengembalian Psikotes</option>
                      <option value="Surat ACC Pengembalian Kelas Tidak Kuota">Surat ACC Pengembalian Kelas Tidak Kuota</option>
                      <option value="Surat ACC Pengembalian Diskon Anak Guru">Surat ACC Pengembalian Diskon Anak Guru</option>
                      <option value="Surat ACC Pengembalian Pindah Program">Surat ACC Pengembalian Pindah Program</option>
                      <option value="Surat ACC Pengembalian Pengalihan Biaya">Surat ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Surat ACC Pengembalian Diskon Karyawan">Surat ACC Pengembalian Diskon Karyawan</option>
                      <option value="Surat ACC Pengembalian Diskon Pengajar">Surat ACC Pengembalian Diskon Pengajar</option>
                      <option value="Surat ACC Pengembalian Kelebihan Bayar">Surat ACC Pengembalian Kelebihan Bayar</option>
                      <option value="Surat ACC Pengembalian Jaminan PTN">Surat ACC Pengembalian Jaminan PTN</option>
                      <option value="Surat ACC Pengembalian Jaminan SMA Favorit">Surat ACC Pengembalian Jaminan SMA Favorit</option>
                      <option value="Surat ACC Diskon Susulan">Surat ACC Diskon Susulan</option>
                      <option value="Surat Tidak ACC Pencairan PT Kolektif">Surat Tidak ACC Pencairan PT Kolektif</option>
                      <option value="Surat Tidak ACC Pencairan Fee Bimker">Surat Tidak ACC Pencairan Fee Bimker</option>
                      <option value="Surat Tidak ACC Pengembalian Kelas Tidak Kuota">Surat Tidak ACC Pengembalian Kelas Tidak Kuota</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Anak Guru">Surat Tidak ACC Pengembalian Diskon Anak Guru</option>
                      <option value="Surat Tidak ACC Pengembalian Pindah Program">Surat Tidak ACC Pengembalian Pindah Program</option>
                      <option value="Surat Tidak ACC Pengembalian Pengalihan Biaya">Surat Tidak ACC Pengembalian Pengalihan Biaya</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Karyawan">Surat Tidak ACC Pengembalian Diskon Karyawan</option>
                      <option value="Surat Tidak ACC Pengembalian Diskon Pengajar">Surat Tidak ACC Pengembalian Diskon Pengajar</option>
                      <option value="Surat Tidak ACC Pengembalian Kelebihan Bayar">Surat Tidak ACC Pengembalian Kelebihan Bayar</option>
                      <option value="Surat Tidak ACC Pengembalian Jaminan PTN">Surat Tidak ACC Pengembalian Jaminan PTN</option>
                      <option value="Surat Tidak ACC Pengembalian Jaminan SMA Favorit">Surat Tidak ACC Pengembalian Jaminan SMA Favorit</option>
                      <option value="Surat Tidak ACC Diskon Susulan">Surat Tidak ACC Diskon Susulan</option>
                      </select>
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default" style="margin-top: 22px;"><span class="fa fa-search"></span> Lihat</button>
                      </span>
                  </div>
                </div>
                 <div class="col-md-1 pull-right">
                 <a href="<?= base_url('Skeluar/data_table')?>" class="btn btn-success" style="margin-top: 22px;"><span class="fa fa-refresh"></span>&nbsp&nbsp&nbspRefresh</a>
              </div>
              </form>
            </div>
          </div>

          <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><span class="icon fa fa-check"></span><?=$this->session->flashdata('success')?></h4>
              <h5><?=$this->session->flashdata('message')?></h5>
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
                  <th style="width: 8%;">Tanggal Input</th>
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
                            <div class="btn-group">
                            <a href="<?= base_url('Skeluar/gantistatus/'). $srt->no.'/ACC' ?>" class="btn btn-success btn-sm" title="ACC"><span class="fa fa-check"></span></a>
                            <a href="<?= base_url('Skeluar/gantistatus/') . $srt->no.'/Tidak ACC' ?>" class=" btn btn-danger btn-sm" title="Tidak ACC"><span class="fa fa-remove"></span></a>
                            <a href="<?= base_url('Skeluar/gantistatus/') . $srt->no.'/Proses' ?>" class=" btn btn-warning btn-sm" title="Proses"><span class="fa fa-gears"></span></a>
                          </div>
                          </td>
                          <?php } ?>  
                          <td>
                            
                          <?php 
                            if($jabat[0] == "Kasie"){ 
                              ?>
                              <div class="btn-group-vertical">
                            <a href="<?= base_url('Skeluar/ubahDataskeluar/'). $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn btn-success" title="Edit"><span class="fa fa-edit" style=""></span> Edit</a>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'.$srt->perihal ?>" class=" btn btn-primary" title="Lihat"><span class="fa fa-eye"></span>  Lihat</a>
                            <a href="<?= base_url('Skeluar/hapusDatasuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class=" btn btn-danger" onClick="return doconfirm();" title="Hapus"><span class="fa fa-trash-o"></span> Hapus </a>
                            <a href="<?= base_url('Skeluar/cetaksuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn btn-info" title="Cetak"><span class="fa fa-print"></span > Cetak</a></div>
                          <?php } else{ 
                            if($srt->status == "Proses"){ ?>
                            <a href="<?= base_url('Skeluar/ubahDataskeluar/'). $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn-sm btn btn-success"><span class="fa fa-edit"></span> Edit</a> 
                            <?php } ?>
                            <a href="<?= base_url('Skeluar/lihatsuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn-sm btn btn-primary"><span class="fa fa-eye"></span> Lihat</a>
                            <a href="<?= base_url('Skeluar/cetaksuratkeluar/') . $srt->no.'/'. $srt->jenis_surat.'/'. $srt->perihal ?>" class="btn-sm btn btn-info"><span class="fa fa-print"></span>  &nbspCetak</a>
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