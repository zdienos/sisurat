   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><span class="fa fa-dashboard"></span>
       Home
       <small>Selamat Bekerja!</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-6 col-xs-9">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <span class="info-box-icon bg-aqua"><i class="fa fa-files-o"></i></span>
            <div class="inner">
              <h3><?php echo $datasmasuk ?></h3>

              <p>Jumlah Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('Smasuk/data_table')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-9">
          <!-- small box -->
          <div class="small-box bg-green">
            <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>
            <div class="inner">
              <h3><?php echo $dataskeluar ?></h3>

              <p>Jumlah Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= base_url('Skeluar/data_table')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>     
    </section>
    <!-- /.content -->

            <!-- /.box-body -->
