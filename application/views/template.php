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
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/morris.js/morris.css')?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css')?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>">
  
</head>
<body class="hold-transition skin-yellow sidebar-mini ">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header" >

    <!-- Logo -->
    <a href="<?= base_url('Home/index')?>" class="logo">
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
              <img src="<?php echo base_url('assets/dist/img/GO.png')?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?= $username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/dist/img/GO.png')?>" class="img-circle" alt="User Image">

                <p>
                  <?= $username?> - SI Surat
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <?php $jabat = explode(" ", $jabatan);
                 if($jabat[0] == "Kasie"){ ?>
                <div class="pull-left">
                <a href="<?php echo site_url('login/user') ?>"" class="btn btn-default btn-flat">User</a>                 
                </div>
              <?php }?>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout') ?>"" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
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
          <img src="<?php echo base_url('assets/dist/img/GO.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $username?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <br><br><br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
      <!-- MENU DINAMIS -->
      <?php
      $main_menu = $this->db->get_where('tabel_menu',array('is_main_menu'=>0))->result();
      foreach ($main_menu as $main) {
          //cek ada submenu
          $submenu = $this->db->get_where('tabel_menu',array('is_main_menu'=>$main->id));
          if ($submenu->num_rows()>0) {
              //tampilkan submenu disini
              echo "<li class='treeview'>
              <a href='#'><i class='".$main->icon."'></i><span>".$main->judul_menu."</span></a>
              <ul class='treeview-menu'>";
              foreach ($submenu->result() as $sub){
                  echo "<li>".anchor($sub->link,"<i class='".$sub->icon."'></i>".$sub->judul_menu)."</li>";
              }
              echo"
              </ul>
              <!-- /.nav-second-level -->
              </li>";
          } else {
              echo "<li class='treeview'>".anchor($main->link,"<i class='".$main->icon."'></i><span>".$main->judul_menu)."</span></li>
              <span class='pull-right-container'>
              <i class='fa fa-angle-left pull-right'></i>
            </span>";
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
    <strong>Copyright &copy; 2018 <a href="http://www.ganesha-operation.com/">Ganesha Operation</a>.</strong> All rights reserved.
  </footer>

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
<script src="<?php echo base_url('assets/fullcalendar/moment.js')?>"></script>
<script src="<?php echo base_url('assets/fullcalendar/fullcalendar.min.js')?>"></script>
<!-- Tabel Dinamis -->
<script src="<?php echo base_url('assets/dist/js/table_dinamis.js')?>"></script>

<script type="text/javascript">
  // Add button Delete in row
$('tbody tr')
    .find('td')
    //.append('<input type="button" value="Delete" class="del"/>')
    .parent(); //traversing to 'tr' Element
    //.append('<td><a href="#" class="delrow">Delete Row</a></td>');

// For select all checkbox in table
$('#checkedAll').click(function (e) {
  //e.preventDefault();
    $(this).closest('#tblAddRow').find('td input:checkbox').prop('checked', this.checked);
});

// Add row the table
$('#btnAddRow').on('click', function() {
    var lastRow = $('#tblAddRow tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow tbody tr:last input').val('');
});

// Delete last row in the table
$('#btnDelLastRow').on('click', function() {
    var lenRow = $('#tblAddRow tbody tr').length;
    //alert(lenRow);
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $('#tblAddRow tbody tr:last').remove();
    }
});

// Delete row on click in the table
$('#tblAddRow').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});

// Delete selected checkbox in the table
$('#btnDelCheckRow').click(function() {
  var lenRow    = $('#tblAddRow tbody tr').length;
    var lenChecked  = $("#tblAddRow input[type='checkbox']:checked").length;
    var row = $("#tblAddRow tbody input[type='checkbox']:checked").parent().parent();
    //alert(lenRow + ' - ' + lenChecked);
    if (lenRow == 1 || lenRow <= 1 || lenChecked >= lenRow) {
        alert("Tidak dapat menghapus semua baris!");
    } else {
        row.remove();
    }
});

</script>

<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>

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
      $('#prihal').hide();
      $('#Pencairan3').hide();
      $('#Transfer').hide();
      $('#mgm_biaya').hide();
      $('#mgm').hide();
      $('#biaya').hide();
      $('#Pembayaranpos').hide();
      $('#pengirim').hide();
      $('#Sidak').hide();

      $('#cjenissurat').change(function() {
        if ($('#cjenissurat').val() == 'Pencairan') {
          $('#Pencairan').hide();
          $('#prihal').show();
          $('#Peringatan').hide();
          $('#Transfer').hide();
          $('#Teguran').hide();
          $('#mgm_biaya').hide();
          $('#mgm').hide();
          $('#biaya').hide();
          $('#Pembayaranpos').hide();
          $('#pengirim').show();
          $('#Sidak').hide();
        } else if ($('#cjenissurat').val() == 'Peringatan') {
          $('#Peringatan').show();
          $('#Pencairan').hide();
          $('#Teguran').hide();
          $('#prihal').hide();
          $('#Pencairan3').hide();
          $('#Transfer').hide();
          $('#prihal').hide();
          $('#mgm_biaya').hide();
          $('#mgm').hide();
          $('#biaya').hide();
          $('#Pembayaranpos').hide();
          $('#pengirim').show();
          $('#Sidak').hide();
        } else if ($('#cjenissurat').val() == 'Teguran') {
          $('#Peringatan').hide();
          $('#Pencairan').hide();
          $('#Teguran').show();
          $('#prihal').hide();
          $('#Pencairan3').hide();
          $('#Transfer').hide();
          $('#mgm_biaya').hide();
          $('#mgm').hide();
          $('#biaya').hide();
          $('#Sidak').hide();
          $('#pengirim').show();
        } else if ($('#cjenissurat').val() == 'Transfer') {
          $('#Peringatan').hide();
          $('#Pencairan').hide();
          $('#Teguran').hide();
          $('#prihal').hide();
          $('#Pencairan3').hide();
          $('#pengirim').hide();
          $('#Transfer').show();
          $('#mgm_biaya').hide();
          $('#mgm').hide();
          $('#biaya').hide();
          $('#Pembayaranpos').hide();
          $('#Sidak').hide();
        } else if ($('#cjenissurat').val() == 'Pembayaran') {
          $('#Peringatan').hide();
          $('#Pencairan').hide();
          $('#Teguran').hide();
          $('#prihal').hide();
          $('#Pencairan3').hide();
          $('#Transfer').hide();
          $('#mgm_biaya').hide();
          $('#mgm').hide();
          $('#biaya').hide();
          $('#Pembayaranpos').show();
          $('#pengirim').hide();
          $('#Sidak').hide();
        } else if ($('#cjenissurat').val() == 'Sidak') {
          $('#Peringatan').hide();
          $('#Pencairan').hide();
          $('#Teguran').hide();
          $('#prihal').hide();
          $('#Pencairan3').hide();
          $('#Transfer').hide();
          $('#mgm_biaya').hide();
          $('#mgm').hide();
          $('#biaya').hide();
          $('#Pembayaranpos').hide();
          $('#pengirim').hide();
          $('#Sidak').show();
        }
      });

      $('#prihal').change(function() {
        // console.log($('#prihal_fee').val());
          if (($('#prihal_fee').val() == 'Surat ACC Pencairan PT Kolektif') || ($('#prihal_fee').val() == 'Surat Tidak ACC Pencairan PT Kolektif') || ($('#prihal_fee').val() == 'Surat ACC Pencairan Fee Bimker') || ($('#prihal_fee').val() == 'Surat Tidak ACC Pencairan Fee Bimker')){
             $('#Pencairan').hide();
             $('#Pencairan3').show();  
             $('#Teguran').hide();  
             $('#Transfer').hide();
             $('#Peringatan').hide();    
             $('#mgm_biaya').hide();
             $('#mgm').hide();
             $('#biaya').hide();
             $('#Sidak').hide();
           } else {
             $('#Pencairan').show();
             $('#Pencairan3').hide();
             $('#Peringatan').hide();
             $('#Teguran').hide();
             $('#Transfer').hide();
             $('#mgm_biaya').hide();
             $('#mgm').hide();
             $('#biaya').hide();
             $('#Sidak').hide();
           }
         });

      $('#jenis_pencairan').change(function() {
        // console.log($('#jenis_pencairan').val());
          if ($('#jenis_pencairan').val() == 'mgm'){
             $('#Pencairan').hide();
             $('#Pencairan3').hide();  
             $('#Teguran').hide();  
             $('#Transfer').show();
             $('#Peringatan').hide();    
             $('#mgm_biaya').hide();
             $('#mgm').show();
             $('#biaya').hide();
             $('#Sidak').hide();
           } else if ($('#jenis_pencairan').val() == 'pengembalian biaya'){
             $('#Pencairan').hide();
             $('#Pencairan3').hide();
             $('#Peringatan').hide();
             $('#Teguran').hide();
             $('#Transfer').show();
             $('#mgm_biaya').hide();
             $('#mgm').hide();
             $('#biaya').show();
             $('#Sidak').hide();
           }  else if ($('#jenis_pencairan').val() == 'mgm dan pengembalian biaya'){
             $('#Pencairan').hide();
             $('#Pencairan3').hide();
             $('#Peringatan').hide();
             $('#Teguran').hide();
             $('#Transfer').show();
             $('#mgm_biaya').show();
             $('#mgm').hide();
             $('#biaya').hide();
             $('#Sidak').hide();
           }
         });

    });

function gantilabel() {
  var x = document.getElementById("prihal_fee").value;
  var jml_disetujui = document.getElementById("jml_disetujui").innerHTML; 
  var norek = document.getElementById("norek").innerHTML; 

  var ganti_jml = jml_disetujui.replace("Jumlah Bayar yg Disetujui", "ACC Marketing");   
  var ganti_acc = jml_disetujui.replace("ACC Marketing", "Jumlah Bayar yg Disetujui");

  var ganti_norek = norek.replace("Norek Siswa", "Keterangan Tidak ACC");   
  var ganti_ket = norek.replace("Keterangan Tidak ACC", "Norek Siswa");

    if((x == "Surat Tidak ACC Pengembalian Kelas Tidak Kuota") || (x == "Surat Tidak ACC Pengembalian Diskon Anak Guru") || (x == "Surat Tidak ACC Pengembalian Pindah Program")|| (x == "Surat Tidak ACC Pengembalian Pengalihan Biaya") || (x == "Surat Tidak ACC Pengembalian Diskon Karyawan")|| (x == "Surat Tidak ACC Pengembalian Diskon Pengajar")|| (x == "Surat Tidak ACC Pengembalian Kelebihan Bayar")|| (x == "Surat Tidak ACC Pengembalian Jaminan PTN")|| (x == "Surat Tidak ACC Pengembalian Jaminan SMA Favorit")|| (x == "Surat Tidak ACC Diskon Susulan")){
    document.getElementById("jml_disetujui").innerHTML = ganti_jml;
    document.getElementById("norek").innerHTML = ganti_norek;        
    } else{
      document.getElementById("jml_disetujui").innerHTML = ganti_acc;                     
      document.getElementById("norek").innerHTML = ganti_ket;
    }
}
</script>
</body>
</html>
