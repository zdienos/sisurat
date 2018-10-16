<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="<?php echo base_url('favicon.ico') ?>">

    <title><?php echo $title; ?></title>
<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css')?>">
  </head>
  <body>
    <div class="background"></div>
    <div class="backdrop"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5" style="top:200px; left: 355px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>
                <h2 style="font-weight: lighter;">SI <br />Surat</h2>
                <img src="<?php echo base_url('assets/img/logo.png') ?>" />
              </center>
              <br />
            </div>
            <div class="panel-body">

              <?php
                if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
                }
                echo form_open('login');
              ?>
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-user"></i>
                  </span>
                  <input type="text" class="form-control" name="username" placeholder="Username / Nama Pengguna">
                </div>
                <br />
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-lock" style="font-size: 20px;"></i>
                  </span>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password / Kata Sandi">
                  <span class="input-group-addon">
                    <i class="fa fa-eye" id="show-password" style="cursor: pointer;"></i>
                  </span>
                </div>
                <br />
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary" style="width: 100%;" name="login"><span class="fa fa-sign-in"></span> Masuk</button>
              <?php echo form_close(); ?>

              <br>
              <center>
                <h6 style="margin-top: 15px; margin-bottom: 0px;">Copyright &copy; 2017 Herryawan. All rights reserved.</h6>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Page Script -->
    <script>
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
