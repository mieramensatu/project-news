<?php
session_start();

//logout manual
session_destroy();
include("../inc/koneksi.php");

if (isset($_POST["submit"] ) ) {
	
	global $connect;

	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);


	$sql 	= "SELECT * FROM administrator WHERE username='".$username."' AND password='".$password."' ";

	$result = mysqli_query($connect,$sql);
	$numrow	= mysqli_num_rows($result);

	$r = mysqli_fetch_array($result);

	if($numrow > 0)
	{
		$_SESSION["loginadmin"] = $r['username'];
		$_SESSION["loginadminid"] = $r['ID'];
		$_SESSION["loginadminemail"] = $r['email'];
		$_SESSION["loginadminnama"] = $r['Nama'];

	}else{

		$error =  "User dan Password tidak cocok";

		header('Location:index.php?error='.$error.'');
		exit;

	}



}

if(empty($_SESSION["loginadmin"]))
{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
    <div class="language">
        <div class="logo">

        </div>
        <form action="" method="POST">
            <label>Username</label>
            <input type="text" name="username" placeholder="username">

            <label>Password</label>
            <input type="password" name="password">

            <input type="submit" name="submit" value="login">
    </div>
</body>
</html>
<?php
exit;
}
?>