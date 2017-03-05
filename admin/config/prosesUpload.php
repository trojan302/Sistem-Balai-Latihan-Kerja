<?php 

require 'conn.php';

if (isset($_POST['slide1'])) {
	
	$deskripsi 		= $_POST['deskripsi1'];
	$judulSlides	= $_POST['judulSlides'];
	$idSlides 		= $_POST['idSlides'];
	$idAdmin 		= $_POST['idAdmin'];

	$filename		= $_FILES['upload1']['name'];
	$fileTemp		= $_FILES['upload1']['tmp_name'];

	$last_updated 	= date('Y-m-d');

	if (isset($_FILES['upload1']['error']) === 0) {
		
		$filePath = "../../libs/slides/" . date('d-m-Y-H-i-s')."-".$filename;

		if(move_uploaded_file($fileTemp, $filePath)) {

            $query = "UPDATE `slides` SET `pathUrl`='$filePath',`filename`='$filename', `judulSlides`='$judulSlides', `deskripsi`='$deskripsi',`idAdmin`='$idAdmin',`last_updated`='$last_updated' WHERE `idSlides`='$idSlides'";

            $sql = mysql_query($query);

            if ($sql) {
              
              header('Location: http://anonymous/project_blk/admin/homepage?success='. urlencode('Gambar Untuk silde 1 berhasil di update!'));

            }else{
              
              header('Location: http://anonymous/project_blk/admin/homepage?err='. urlencode('Gambar Untuk silde 1 gagal di update!'));

            }

        }

	}else{

		$query = "UPDATE `slides` SET `judulSlides`='$judulSlides', `deskripsi`='$deskripsi',`idAdmin`='$idAdmin',`last_updated`='$last_updated' WHERE `idSlides`='$idSlides'";

        $sql = mysql_query($query);

        if ($sql) {
          
          header('Location: http://anonymous/project_blk/admin/homepage?success='. urlencode('Gambar Untuk silde 1 berhasil di update!'));

        }else{
          
          header('Location: http://anonymous/project_blk/admin/homepage?err='. urlencode('Gambar Untuk silde 1 gagal di update!'));

        }

	}

}

if (isset($_POST['slide2'])) {
	
	$deskripsi 		= $_POST['deskripsi2'];
	$judulSlides	= $_POST['judulSlides'];
	$idSlides 		= $_POST['idSlides'];
	$idAdmin 		= $_POST['idAdmin'];

	$filename		= $_FILES['upload2']['name'];
	$fileTemp		= $_FILES['upload2']['tmp_name'];

	$last_updated 	= date('Y-m-d');

	if (isset($_FILES['upload2']['error']) === 0) {
		
		$filePath = "../../libs/slides/" . date('d-m-Y-H-i-s')."-".$filename;

		if(move_uploaded_file($fileTemp, $filePath)) {

            $query = "UPDATE `slides` SET `pathUrl`='$filePath',`filename`='$filename', `judulSlides`='$judulSlides', `deskripsi`='$deskripsi',`idAdmin`='$idAdmin',`last_updated`='$last_updated' WHERE `idSlides`='$idSlides'";

            $sql = mysql_query($query);

            if ($sql) {
              
              header('Location: http://anonymous/project_blk/admin/homepage?success='. urlencode('Gambar Untuk silde 1 berhasil di update!'));

            }else{
              
              header('Location: http://anonymous/project_blk/admin/homepage?err='. urlencode('Gambar Untuk silde 1 gagal di update!'));

            }

        }

	}else{

		$query = "UPDATE `slides` SET `judulSlides`='$judulSlides', `deskripsi`='$deskripsi',`idAdmin`='$idAdmin',`last_updated`='$last_updated' WHERE `idSlides`='$idSlides'";

        $sql = mysql_query($query);

        if ($sql) {
          
          header('Location: http://anonymous/project_blk/admin/homepage?success='. urlencode('Gambar Untuk silde 1 berhasil di update!'));

        }else{
          
          header('Location: http://anonymous/project_blk/admin/homepage?err='. urlencode('Gambar Untuk silde 1 gagal di update!'));

        }

	}

}

if (isset($_POST['slide3'])) {
	
	$deskripsi 		= $_POST['deskripsi3'];
	$judulSlides	= $_POST['judulSlides'];
	$idSlides 		= $_POST['idSlides'];
	$idAdmin 		= $_POST['idAdmin'];

	$filename		= $_FILES['upload3']['name'];
	$fileTemp		= $_FILES['upload3']['tmp_name'];

	$last_updated 	= date('Y-m-d');

	if (isset($_FILES['upload3']['error']) === 0) {
		
		$filePath = "../../libs/slides/" . date('d-m-Y-H-i-s')."-".$filename;

		if(move_uploaded_file($fileTemp, $filePath)) {

            $query = "UPDATE `slides` SET `pathUrl`='$filePath',`filename`='$filename', `judulSlides`='$judulSlides', `deskripsi`='$deskripsi',`idAdmin`='$idAdmin',`last_updated`='$last_updated' WHERE `idSlides`='$idSlides'";

            $sql = mysql_query($query);

            if ($sql) {
              
              header('Location: http://anonymous/project_blk/admin/homepage?success='. urlencode('Gambar Untuk silde 1 berhasil di update!'));

            }else{
              
              header('Location: http://anonymous/project_blk/admin/homepage?err='. urlencode('Gambar Untuk silde 1 gagal di update!'));

            }

        }

	}else{

		$query = "UPDATE `slides` SET `judulSlides`='$judulSlides', `deskripsi`='$deskripsi',`idAdmin`='$idAdmin',`last_updated`='$last_updated' WHERE `idSlides`='$idSlides'";

        $sql = mysql_query($query);

        if ($sql) {
          
          header('Location: http://anonymous/project_blk/admin/homepage?success='. urlencode('Gambar Untuk silde 1 berhasil di update!'));

        }else{
          
          header('Location: http://anonymous/project_blk/admin/homepage?err='. urlencode('Gambar Untuk silde 1 gagal di update!'));

        }

	}

}

?>