<?php 
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'pb');

define('URL_SITUS', 'http://localhost/portalberita/');

$connect = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if(mysqli_connect_errno()){
    echo "Gagal Koneksi ke Database" . mysqli_connect_error();
}