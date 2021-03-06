<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI Surat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css')?>">
   <!-- Background -->
 <link rel="stylesheet" href="<?php echo base_url('assets/background.css') ?>">
</head>

<body class="hold-transition login-page"> 

<div id="background">
  <!-- <img src="<?php echo base_url('assets/img/background.jpg') ?>"> -->
</div>
<div class="transparan2"></div>
<!-- <div class="backdrop"></div> -->
<div class="login-box">
  <div class="login-logo">
    <b>SI</b>Surat
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <?php
          if(validation_errors()){
      ?>
         <div class="alert alert-danger alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <strong><?php echo validation_errors(); ?></strong>
         </div>
      <?php 
      }
      ?>
    <form action="<?= base_url('Login')?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username / Nama Pengguna">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	    <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password / Kata Sandi">        
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>         
      </div>
 
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js')?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
    	$(document).ready(function(){
    		$('#show-password').click(function()
    		{
    			if ($(this).hasClass('fa-eye'))
    			{
    				$('#password').attr('type', 'text');
    				$(this).removeClass('fa-eye');
    				$(this).addClass('fa-eye-slash');
    			} else {
    				$('#password').attr('type', 'password');
    				$(this).removeClass('fa-eye-slash');
    				$(this).addClass('fa-eye');
    			}
    		})
    	});
</script>
</body>
</html>
