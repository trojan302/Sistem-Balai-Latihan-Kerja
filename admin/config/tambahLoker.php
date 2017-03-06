<?php 

require './conn.php';

$judul = $_POST['judul'];
$closingDate = $_POST['closingDate'];
$content = $_POST['content'];
$date = date('Y-m-d');

$query = "INSERT INTO `loker`(`judulLoker`, `deskripsi`, `closingDate`, `tanggalUpload`, `tanggalEdit`, `idAdmin`) VALUES ('$judul','$content','$closingDate','$date','NULL','1')";
$sql = mysql_query($query);

if ($sql) {
	echo "Data Successfully Inserted";
}else{
	echo "Data Not inserted!";
}

?>