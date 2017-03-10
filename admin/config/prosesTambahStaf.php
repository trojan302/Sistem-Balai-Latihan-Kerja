<?php 

require './conn.php';

if (isset($_POST['tambahStaf'])) {

	$nama 		= $_POST['nama'];
	$telepon 	= $_POST['telepon'];
	$email 		= $_POST['email'];
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$alamat 	= $_POST['alamat'];
	$jabatan 	= $_POST['jabatan'];
	$kejuruan 	= $_POST['kejuruan'];
	$idAdmin 	= $_POST['idAdmin'];
	$created 	= $_POST['created'];
	$updated 	= NULL;

	$photoname = $_FILES['photo']['name'];
	$phototmp = $_FILES['photo']['tmp_name'];

	$uniqID = time();

	// echo "<pre>",var_dump($_POST).var_dump($_FILES),"</pre>";

	if ($_FILES['photo']['error'] == 0) {

		$photo = "../../libs/staf/staf-".$uniqID."-".$_FILES['photo']['name'];
		
		if(move_uploaded_file($phototmp, $photo)){
			
			$query = "INSERT INTO `staf_blk`(`stafID`, `username`, `password`, `nama`, `alamat`, `telepon`, `photo`, `email`, `id_kejuruan`, `idAdmin`, `jabatan`, `created`, `updated`) VALUES ('','".$username."','".md5($password)."','".$nama."','".$alamat."','".$telepon."','".$photo."','".$email."','".$kejuruan."','".$idAdmin."','".$jabatan."','".$created."','$updated')";

			$sql = mysql_query($query);

			if ($sql) {
				header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&success='.urlencode('Data berhasil ditambahkan'));
			}else{
				header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&success='.urlencode('Data gagal ditambahkan'));
			}

		}

	}else{

		header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&err='.urlencode('Data gagal ditambahkan'));

	}
	
}


if (isset($_POST['editStaf'])) {

	$nama 		= $_POST['nama'];
	$telepon 	= $_POST['telepon'];
	$email 		= $_POST['email'];
	$username 	= $_POST['username'];
	$alamat 	= $_POST['alamat'];
	$jabatan 	= $_POST['jabatan'];
	$kejuruan 	= $_POST['kejuruan'];
	$stafID 	= $_POST['stafID'];
	$created 	= $_POST['created'];
	$updated 	= $_POST['updated'];

	$photoname = $_FILES['photo']['name'];
	$phototmp = $_FILES['photo']['tmp_name'];

	$uniqID = time();

	// echo "<pre>",var_dump($_POST).var_dump($_FILES),"</pre>";

	if ($photoname == '') {
		
			$query = "UPDATE `staf_blk` SET `username`='$username',`nama`='$nama',`alamat`='$alamat',`telepon`='$telepon',`email`='$email',`id_kejuruan`='$kejuruan',`jabatan`='$jabatan',`created`='$created',`updated`='$updated' WHERE `stafID`='$stafID'";

			$sql = mysql_query($query);

			if ($sql) {
				header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&success='.urlencode('Data berhasil idupdate'));
			}else{
				header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&success='.urlencode('Data gagal idupdate'));
			}

	}else{

		if ($_FILES['photo']['error'] == 0) {

			$photo = "../../libs/staf/staf-".$uniqID."-".$_FILES['photo']['name'];
			
			if(move_uploaded_file($phototmp, $photo)){
				
				$query = "UPDATE `staf_blk` SET `username`='$username',`nama`='$nama',`alamat`='$alamat',`telepon`='$telepon',`photo`='$photo',`email`='$email',`id_kejuruan`='$kejuruan',`jabatan`='$jabatan',`created`='$created',`updated`='$updated' WHERE `stafID`='$stafID'";

				$sql = mysql_query($query);

				if ($sql) {
					header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&success='.urlencode('Data berhasil idupdate'));
				}else{
					header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&success='.urlencode('Data gagal idupdate'));
				}

			}
		}else{

			header('Location: http://anonymous/project_blk/admin/staf?_tambahStaf&err='.urlencode('Data gagal idupdate'));

		}
	}
	
}

?>