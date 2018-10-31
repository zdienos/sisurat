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
          <div class="small-box bg-green">
            <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>
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
          <div class="small-box bg-red">
            <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>
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
<!-- ======================================================================================================================================== -->
      <div class="row">
      <div class="col-md-7" position="center">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Ganesha Operation</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url('assets/img/go1.jpg')?>" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('assets/img/go2.jpg')?>" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('assets/img/go3.jpg')?>" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('assets/img/go4.jpg')?>" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-5">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="<?php echo base_url('assets/dist/img/GO.png')?>" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">Keuangan</h3>
              <h5 class="widget-user-desc">Ganesha Operation</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Analisis Data<span class="pull-right badge bg-blue">11 Orang</span></a></li>
                <li><a href="#">Pengembalian<span class="pull-right badge bg-aqua">8 Orang</span></a></li>
                <li><a href="#">Kwitansi<span class="pull-right badge bg-green">8 Orang</span></a></li>
                <li><a href="#">Storan<span class="pull-right badge bg-red">7 Orang</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        </div>
    </section>


