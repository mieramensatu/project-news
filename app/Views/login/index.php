<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>/assets/images/logo.png">
  <!-- CSS BOOTSTRAP -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- CSS JAVA WEB MEDIA -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/1.css">

  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
  <div class="login">


    <h1 class="text-center" style="font-family: 'Fredoka One', cursive;">LOGIN ADMIN</h1> 

    <?php $session = \Config\Services::session();
    if($session->getFlashdata('sukses')) { ?>
      <p class="alert alert-success"><?php echo $session->getFlashdata('sukses'); ?></p>
    <?php } ?>
    <?php 
    if(isset($error)){
      echo '<p class="alert alert-warning">'.$error.'</p>';
    }

    echo form_open(base_url('login')) ?>
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
      <button class="btn btn-success btn-lg btn-block" type="submit" name="login">Login</button>
    </div>
    <?php echo form_close(); ?>
    
    <footer class="footer-javawebmedia">
      Web Design by <a href="https://javawebmedia.com" target="_blank">Portal Gading Berita</a>
    </footer>
  </div>
</body>
</html>