<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Surat</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/Ionicons/css/ionicons.min.css') ?>">
     <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/select2/select2.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/skin-blue.min.css')?>">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="<?php echo base_url('assets/fullcalendar/fullcalendar.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/fullcalendar/fullcalendar.print.css')?>" media="print">
  <link rel="stylesheet" href="<?php echo base_url('assets/fullcalendar/fullcalendar.css')?>">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">SI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI Surat</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('assets/dist/img/LogoGO.png')?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/dist/img/LogoGO.png')?>" class="img-circle" alt="User Image">

                <p>
                  Admin - SI Surat
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout') ?>"" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/LogoGO.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <br><br><br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">

                        <!-- MENU DINAMIS -->
                        <?php
                        $main_menu = $this->db->get_where('tabel_menu',array('is_main_menu'=>0))->result();
                        foreach ($main_menu as $main) {
                            //cek ada submenu
                            $submenu = $this->db->get_where('tabel_menu',array('is_main_menu'=>$main->id));
                            if ($submenu->num_rows()>0) {
                                //tampilkan submenu disini
                                echo "<li>
                                <a href='#'><i class='".$main->icon."'></i>".$main->judul_menu."</a>
                                <ul class='treeview-menu'>";
                                foreach ($submenu->result() as $sub){
                                    echo "<li>".anchor($sub->link,"<i class='".$sub->icon."'></i>".$sub->judul_menu)."</li>";
                                }
                                echo"
                                </ul>
                                <!-- /.nav-second-level -->
                                </li>";
                            } else {
                                echo "<li>".anchor($main->link,"<i class='".$main->icon."'></i>".$main->judul_menu)."</li>";
                            }
                        }
                        ?>
                        <!-- End Menu Dinamis -->
     </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       <?php echo $contents;?>     

  </div>
  <!-- /.content-wrapper -->


    <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Ganesha Operation</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js')?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js')?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/plugins/select2/select2.full.min.js')?>"></script>
<!-- page script -->
<!-- fullCalendar 2.2.5 -->
<script src="<?php echo base_url('assets/fullcalendar/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/fullcalendar/fullcalendar.min.js')?>"></script>
<script src="<?php echo base_url('assets/fullcalendar/fullcalendar.js')?>"></script>
<script src="<?php echo base_url('assets/calendar.js')?>"></script>

<script>
  $(function () {
	$(".select2").select2();
    $("#example1-wrapper").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script>
    $(window).load(function() {
      $('#Pencairan').hide();
      $('#Peringatan').hide();
      $('#Teguran').hide();

      $('#cjenissurat').change(function() {
        if ($('#cjenissurat').val() == 'Pencairan') {
          $('#Pencairan').show();
          $('#Peringatan').hide();
          $('#Teguran').hide();          

        } else if ($('#cjenissurat').val() == 'Peringatan') {
          $('#Peringatan').show();
          $('#Pencairan').hide();
          $('#Teguran').hide();
        } else if ($('#cjenissurat').val() == 'Teguran') {
          $('#Peringatan').hide();
          $('#Pencairan').hide();
          $('#Teguran').show();
        }
      });
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
