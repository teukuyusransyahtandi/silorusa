<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Login Silorusa</title>

    <!-- vendor css -->
    <link href="<?php echo base_url('assets/'); ?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/'); ?>lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

<?php echo form_open('proses/proses_login'); ?>
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> Login <span class="tx-normal"></span></div>
        <div class="tx-center mg-b-60">Mohon Login Terlebih Dahulu Untuk Menggunakan Aplikasi</div>

        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Enter your username">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">Sign In</a>

      </div><!-- login-wrapper -->
      <?php echo form_close(); ?>
    </div><!-- d-flex -->

    <script src="<?php echo base_url('assets/'); ?>lib/jquery/jquery.js"></script>
    <script src="<?php echo base_url('assets/'); ?>lib/popper.js/popper.js"></script>
    <script src="<?php echo base_url('assets/'); ?>lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
