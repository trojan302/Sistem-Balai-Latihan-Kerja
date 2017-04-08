<?php

require_once 'conn.php';

if (isset($_POST['addFeature'])) {

	$judulFeature 	= $_POST['judulFeature'];
	$deskFeature 	= $_POST['deskFeature'];
	$idAdmin 		= $_POST['idAdmin'];

	$filename		= $_FILES['images']['name'];
	$filetype		= $_FILES['images']['type'];
	$filetmp		= $_FILES['images']['tmp_name'];
	$fileerror		= $_FILES['images']['error'];
	$filesize		= $_FILES['images']['size'];

	$created 		= date('Y-m-d');

	$availabe		= array(
		"image/png",
		"image/gif",
		"image/jpeg"
	);

	$dir 			= '../../libs/photos/';
	$upload 		= $dir . date('d-m-Y') . '-' . $filename;

	if ($fileerror == 0) {
		
		if (in_array($filetype, $availabe)) {
			
			if ($filesize < 10000000) {
				
				$sql = mysql_query("INSERT INTO `features`(`idFeatures`, `judulFeature`, `deskFeature`, `images`, `pathUrl`, `idAdmin`, `last_updated`) VALUES ('','".$judulFeature."','".$deskFeature."','".$filename."','".$upload."','".$idAdmin."','".$created."')");

				if ($sql) {
					
					move_uploaded_file($filetmp, $upload);

					header('Location: http://localhost/project_blk/v.1.0.3/admin/homepage');

				}

			}

		}

	}

	header('Location: http://localhost/project_blk/v.1.0.3/admin/homepage');

}

if (isset($_POST['editFeature'])) {

	$judulFeature 	= $_POST['judulFeature'];
	$deskFeature 	= $_POST['deskFeature'];
	$idAdmin 		= $_POST['idAdmin'];
	$idFeatures 	= $_POST['idFeatures'];
	$file_image 	= $_POST['file_image'];

	$filename		= $_FILES['images']['name'];
	$filetype		= $_FILES['images']['type'];
	$filetmp		= $_FILES['images']['tmp_name'];
	$fileerror		= $_FILES['images']['error'];
	$filesize		= $_FILES['images']['size'];

	$created 		= date('Y-m-d');

	$availabe		= array(
		"image/png",
		"image/gif",
		"image/jpeg"
	);

	$dir 			= '../../libs/photos/';
	$upload 		= $dir . date('d-m-Y') . '-' . $filename;

	if (empty($_FILES['images']['name'])) {
		
		$sql = mysql_query("UPDATE features SET judulFeature='".$judulFeature."', deskFeature='".$deskFeature."' WHERE idFeatures='".$idFeatures."'");

		header('Location: http://localhost/project_blk/v.1.0.3/admin/homepage');

	}else{

		if ($fileerror == 0) {
		
			if (in_array($filetype, $availabe)) {
				
				if ($filesize < 10000000) {
					
					$sql = mysql_query("UPDATE features SET judulFeature='".$judulFeature."', deskFeature='".$deskFeature."', images='".$filename."', pathUrl='".$upload."', last_updated='".$created."' WHERE idFeatures='".$idFeatures."'");

					if ($sql) {

						unlink($file_image);
						
						move_uploaded_file($filetmp, $upload);

						header('Location: http://localhost/project_blk/v.1.0.3/admin/homepage');

					}

				}

			}

		}

		header('Location: http://localhost/project_blk/v.1.0.3/admin/homepage');

	}

}

?>