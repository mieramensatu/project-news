<?php
include("ceklogin.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
    <div class="wrap shadow mt10 mb10 border">
	<div class="bg_grey">
		<h3 class="pd10">Selamat Datang di Halaman Administrator</h3>

		<hr>
		<div class="menu pd10">

			<a href="./">Home</a>
			<a href="?mod=kategori">Kategori</a>
			<a href="?mod=berita">Berita</a>
			<a href="?mod=konfigurasi">Konfigurasi</a>
			<a href="?mod=useradmin">User Admin</a>

			<span class="fr"><a href="?keluar=yes">Log Out</a></span>


		</div>

		<div class="clear"></div>
	</div>

    <div class="pd10">
        <?php 
		$mod = (isset($_GET['mod']) ? $_GET['mod'] : '');

		switch ($mod) {
			case 'useradmin':
				include("useradmin.php");
				break;
			case 'konfigurasi':
				include("konfigurasi.php");
				break;
			case 'berita':
				include("berita.php");
				break;
			case 'kategori':
				include("kategori.php");
				break;
			
			default:
				echo "Selamat Datang ".$_SESSION['loginadminnama']." ";
				break;
		}

		 ?>
</div>
</div>
</body>
</html>