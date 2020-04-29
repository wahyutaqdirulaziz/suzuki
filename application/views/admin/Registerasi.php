
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Suzuki | registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/admin1/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/admin1/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/admin1/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/admin1/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/admin1/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= site_url('')?>"><b>Suzuki</b>Njs</a>
 
  </div>
  <!-- /.login-logo -->
 
  <?php if ($this->session->flashdata('danger')): ?>
											<div class="alert alert-danger" role="alert">
                      <?php echo $this->session->flashdata('danger'); ?>
											</div>
											<?php endif; ?>
  <div class="login-box-body">
  
    <p class="login-box-msg">Registerasi</p>
    <?php echo validation_errors(); ?>
    <form action="<?php echo site_url('Register/proses_registrasi') ?>" method="post" enctype="multipart/form-data" >
     <div class="form-group has-feedback">
     <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
   
        <input type="text" name="nama" class="form-control" placeholder="Full name"  value="<?= set_value('nama') ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"><?php echo form_error('nama') ?></span>
        </div>
    <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email"  value="<?= set_value('email') ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"><?php echo form_error('email_valid') ?></span>
      </div>

      <div class="form-group has-feedback">
        <input type="number" name="no_hp" class="form-control" placeholder="No handphone"  value="<?= set_value('no_hp') ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"><?php echo form_error('no_hp') ?></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"><?php echo form_error('password') ?></span>
      </div>
      <div class="form-group has-feedback">
      <input type="hidden" name="role_id" class="form-control" value="2" >
      
        <input type="password" name="passconf" class="form-control" placeholder="Retype password" required="">
        <span class="glyphicon glyphicon-log-in form-control-feedback"><?php echo form_error('passconf') ?></span>
      </div>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets')?>/admin1/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets')?>/admin1/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url('assets')?>/admin1/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
