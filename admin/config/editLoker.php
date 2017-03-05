<?php 

require './conn.php';

$idLoker = $_POST['idLoker'];
$judul = $_POST['judul'];
$closingDate = $_POST['closingDate'];
$content = $_POST['content'];
$date = date('Y-m-d');

$query = "UPDATE `loker` SET `judulLoker`='$judul',`deskripsi`='$content',`closingDate`='$closingDate',`tanggalEdit`='$date' WHERE `idLoker`='$idLoker'";
$sql = mysql_query($query);

if ($sql) {
	echo "Data Successfully Updated!";
}else{
	echo "Data Not Updated!!";
}

?>