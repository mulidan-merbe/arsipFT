
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E - Surat | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('<?= base_url()?>/public/bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card card-primary card-outline" style="min-height: 400px">
    <div class="card-body login-card-body">
    <div class="login-logo">
    <img src="<?= base_url()?>/logo-lowres.png" alt="" style="width: 50px">
    <br>
    <h6 class="mt-3">LOGIN APLIKASI</h6>
    <h4><b>E-ARSIP FAKULTAS TEKNIK</b></h4>
  </div>
      <!-- <p class="login-box-msg">Silahkan Login </p> -->
        <?php
        $errors = session()->getFlashdata('errors');
        if(!empty($errors)){ ?>
            <div class="alert alert-danger alert-dismissible">
                <?php foreach ($errors as $key => $value) { ?>
                   <li><?= esc($value) ?></li>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if (session()->getFlashdata('pesan')){
            echo '<div class="alert alert-danger alert-dismissible">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        } ?>
      <?php echo form_open('Auth/login'); ?>
        <div class="input-group mb-3 mt-4">
          <input type="email" name="Email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="mt-3">
            <button type="submit" class="btn btn-primary btn-block w-100">MASUK</button>
          </div>
          <!-- /.col -->
        </div>
     <?php echo form_close(); ?>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
</body>
</html>
