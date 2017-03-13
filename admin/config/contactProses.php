<?php 

require 'conn.php';

$contactHeading 	= $_POST['contactHeading'];
$contactText 		= $_POST['contactDeskripsi'];
$contactTelepon 	= $_POST['contactTelepon'];
$contactAlamat 		= $_POST['contactAlamat'];
$id 				= $_POST['id'];
$date 				= date('Y-m-d');

$query = "UPDATE `contact` SET `contactHeading`='$contactHeading',`contactTelepon`='$contactTelepon',`contactAlamat`='$contactAlamat',`contactText`='$contactText',`last_updated`='$date' WHERE `id`='$id'";
$sql = mysql_query($query);

if ($sql) {
	
	header('Location: http://localhost/project_blk/admin/contactpage?success='. urlencode('Halaman Kontak Berhasil Diupdate!!'));

}else{

	header('Location: http://localhost/project_blk/admin/contactpage?err='. urlencode('Halaman Kontak Gagal Diupdate!!'));

}


?>