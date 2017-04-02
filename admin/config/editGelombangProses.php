<?php 

require './conn.php';

$GelombangID 		= $_POST['GelombangID'];
$GelombangNama 		= $_POST['GelombangNama'];
$GelombangKuota 	= $_POST['GelombangKuota'];
$GelombangSyarat 	= $_POST['GelombangSyarat'];
$Status 			= $_POST['Status'];

$query = "UPDATE `gelombang` SET `nama`='$GelombangNama', `kuota`='$GelombangKuota', `syarat`='$GelombangSyarat', `keterangan`='$Status' WHERE `idGelombang`='$GelombangID'";
$sql = mysql_query($query);

if ($sql) {
	header('Location: http://localhost/project_blk/v.1.0.3/admin/kejuruan?edit='.$GelombangID.'&success='.urlencode('Data Berhasil diupdate!'));
}else{
	header('Location: http://localhost/project_blk/v.1.0.3/admin/kejuruan?edit='.$GelombangID.'&err='.urlencode('Data Gagal diupdate!'));
}

?>