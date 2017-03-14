<?php

require './config/backupFunction.php';

$listBackup = listBackup();

foreach ($listBackup as $data) {

	if(count($listBackup) > 0){

		if ($data['jadwal'] == date('d-m-Y')) {

			$para = array(
			    'db_host'=> 'localhost',  // mysql server
			    'db_uname' => 'root',  // username server
			    'db_password' => '', // password server
			    'db_to_backup' => 'project_blk', // nama databse
			    'db_backup_path' => 'database/', // lokasi data setelah dibackup
			    'db_exclude_tables' => array('db_backup'), // tabel pengecualian
			    'db_filename' => $data['filename'], // nama database
			);

			__backup_mysql_database($para);

			$sql = "DELETE FROM db_backup WHERE idBackup='".$data['idBackup']."'";
			$run = mysql_query($sql);

			if ($run) {
				echo "<br> Database dibackup, list dikosongkan....";
			}else{
				echo "List gagal dikosongkan";
			}
			
		}else{
			echo "Data belum dibackup data akan dibackup pada tanggal : ".$data['jadwal'];
		}

	}else{

		echo "Jadwal Backup tidak.";

	}

	

}

?>