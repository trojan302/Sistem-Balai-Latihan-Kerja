<?php 


require './conn.php';

if (isset($_POST['ganti_password'])) {
	

	$password 		= $_POST['password']; // password lama
	$re_password 	= $_POST['re_password']; // ulangi password lama

	$password1 		= $_POST['password1']; // password baru
	$re_password1 	= $_POST['re_password1']; // ulangi password baru

	$stafID 		= $_POST['stafID']; // identifikasi peserta
	
	$username_lama  = $_POST['username_lama']; // identifikasi username lama
	$username_baru  = $_POST['username_baru']; // identifikasi username baru

	$sql 			= "SELECT * FROM staf_blk WHERE password=md5('$re_password') AND stafID='$stafID'";
	$query 			= mysql_query($sql);
	$row 			= mysql_num_rows($query);

	if ($row > 0) {

		$result = mysql_fetch_assoc($query);


		if ($password == $re_password && md5($password) == $result['password']) {

			if (strlen($_POST['password1']) <= 5 || strlen($_POST['re_password1']) <= 5) {

				header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&warning='. urlencode('Password harus lebih dari 5 karakter'));
				
			}else{

				if ($_POST['password1'] == $_POST['re_password1']) {

					if ($username_baru != '') {

							$update = "UPDATE staf_blk SET password=md5('$re_password1'), username='$username_baru', passnohash='$re_password1' WHERE stafID='$stafID'";
							$runUpdate = mysql_query($update);

							if ($runUpdate) {
								
								header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&success='. urlencode('Password sudah diubah'));

							}else{

								header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&err='. urlencode('Password gagal diubah'));

							}

						}else{

							$update = "UPDATE users SET password=md5('$re_password1'), username='$username_lama', passnohash='$re_password1' WHERE id_peserta='$id_peserta'";
							$runUpdate = mysql_query($update);

							if ($runUpdate) {
								
								header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&success='. urlencode('Password sudah diubah'));

							}else{

								header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&err='. urlencode('Password gagal diubah'));

							}

						}

				}else{

					header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&err='. urlencode('Password baru tidak sama<br>'));

				}

			}
			
		}else{

			header('Location: http://localhost/project_blk/staf/dashboard?ganti_password=true&err='. urlencode('Password lama tidak sama<br>'));

		}
		
	}

}else{

	header('Location: http://localhost/project_blk/staf/dashboard');

}


?>