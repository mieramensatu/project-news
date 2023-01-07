<?php

if (isset($_POST['uploadlogo'])) {

	if(!empty($_FILES['logositus']['name']) && ($_FILES['logositus']['error'] !== 4 ))
	{
		$filetype = $_FILES['logositus']['type'];

		$allowtype = array('image/jpeg', 'image/jpg', 'image/png');

		if(!in_array($filetype, $allowtype))
		{

			echo 'Invalid file type';

		}else {

			$dest = '../'.PATH_LOGO.'/'.FILE_LOGO;

			copy($_FILES['logositus']['tmp_name'], $dest);

		}

	}

}
if (isset($_POST['uploadicon'])) {

	if(!empty($_FILES['iconsitus']['name']) && ($_FILES['iconsitus']['error'] !== 4 ))
	{
		$filetype = $_FILES['iconsitus']['type'];

		$allowtype = array('image/png','iamge/gif');

		if(!in_array($filetype, $allowtype))
		{

			echo 'Invalid file type';

		}else {

			$dest = '../'.FILE_ICON;

			copy($_FILES['iconsitus']['tmp_name'], $dest);

		}

	}

}

?>

<div class="w60 fl">
<form action="./?mod=konfigurasi" method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>Logo Situs</legend>

		<img src="<?=URL_SITUS.PATH_LOGO.'/'.FILE_LOGO;?>" width="250">

		<div class="clear"></div>

		<input type="file" name="logositus">

		<input type="submit" name="uploadlogo" value="Upload Logo">

	</fieldset>
</form>
</div>

<div class="w40 fl">
<form action="./?mod=konfigurasi" method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>Icon Situs</legend>

		<img src="<?=URL_SITUS.'/'.FILE_ICON;?>" width="50">

		<div class="clear"></div>

		<input type="file" name="iconsitus">

		<input type="submit" name="uploadicon" value="Upload Icon">

	</fieldset>
</form>
</div>

<div class="clear"></div>