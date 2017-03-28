<?php 

date_default_timezone_set('Asia/Jakarta');

require './conn.php';

if (isset($_POST)) {
	
	echo "<pre>",print_r($_POST),"</pre>";

	$jadwal 	= $_POST['tanggalBackup']."-".$_POST['bulanBackup']."-".$_POST['backupTahun'];
	$namaFile 	= $_POST['namaFile'];
	$created 	= date('d-m-Y H:i:s');

	$sql 		= "INSERT INTO db_backup (filename,jadwal,created) VALUES ('$namaFile','$jadwal','$created')";
	$run 		= mysql_query($sql);

	if ($run) {
		header('Location: http://localhost/project_blk/v.1.0.3/admin/backups?success='.urlencode('Setting Backup Database telah ditetapkan'));
	}else{
		header('Location: http://localhost/project_blk/v.1.0.3/admin/backups?success='.urlencode('Setting Backup Database gagal ditetapkan'));
	}

}


?>