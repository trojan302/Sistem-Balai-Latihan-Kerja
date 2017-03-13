<?php 

require './conn.php';

$text = $_POST['text'];
$idAdmin = $_POST['idAdmin'];

$query = "UPDATE `visimisi` SET `text` = '$text' WHERE `idVisiMisi` = '$idAdmin'";
$sql = mysql_query($query);

if ($sql) {
	header('Location: http://localhost/project_blk/admin/homepage?success='.urlencode('Data berhasil diupdate!').'#VisiMisi');
}else{
	header('Location: http://localhost/project_blk/admin/homepage?success='.urlencode('Data gagal diupdate!').'#VisiMisi');
}

?>