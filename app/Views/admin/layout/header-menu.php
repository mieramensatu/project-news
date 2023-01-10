<?php 
$session = \Config\Services::session();
$session        = \Config\Services::session();
use App\Models\User_model;
$model          = new User_model();
$user_login     = $model->detail($session->get('user_id'));
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url() ?>" target="_blank">
  	<img src="<?php echo base_url() ?>/assets/images/2.jpg" class="img img-fluid logo-admin" style="max-height: 40px; width: auto;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php if($session->get('akses_level') == "Admin") { ?>
    <div class="collapse navbar-collapse" style="padding-left: 200px" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('admin/dasbor') ?>">Dasbor <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/berita') ?>">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>">Kategori Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/user') ?>">Pengguna</a>
        </li>
        <!-- <li class="nav-item active">
          <a class="nav-link" href="https://javawebmedia.com" target="_blank">Gading Portal Berita</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-success" href="<?php echo base_url('admin/dasbor/akun') ?>"><?php echo $user_login['user_nama'] ?> (<?php echo $user_login['akses_level'] ?>)</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="<?php echo base_url('login/logout') ?>">Logout</a>
        </li>
      </ul>
    </div>
  <?php } else { ?>
   <div class="collapse navbar-collapse" style="padding-left: 300px" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dasbor') ?>">Dasbor <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/berita') ?>">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>">Kategori Berita</a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="https://javawebmedia.com" target="_blank">Gading Portal Berita</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link text-success" href="<?php echo base_url('admin/dasbor/akun') ?>"><?php echo $user_login['user_nama'] ?> (<?php echo $user_login['akses_level'] ?>)</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="<?php echo base_url('login/logout') ?>">Logout</a>
      </li>
    </ul>
  </div>
<?php } ?>

</nav>
<div class="container inner-content">
  <div class="row">
    <div class="col-md-12">

