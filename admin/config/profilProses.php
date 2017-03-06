<?php 

require './conn.php';

$content = $_POST['content'];
$date = date('Y-m-d');
$id      = 1;

$query = "UPDATE `profil` SET `profilDeskripsi`='$content',`last_updated`='$date' WHERE `id`='$id'";
$sql = mysql_query($query);

if ($sql) {
	echo "Data berhasil diupdate!";
} else {
	echo "Data gagal diupdate";
}

?>