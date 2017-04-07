<?php

require './config/backupFunction.php';

$listBackup = listBackup();

foreach ($listBackup as $data) {

	if(count($listBackup) > 0){

		if ($data['jadwal'] == date('d/m/Y')) {

			$backup_file = 'database/db-backup-'.$data['filename'].'-'.date('Y-m-d').'.sql';

			$mybackup = backup_tables("localhost","root","","project_blk","peserta");

			$handle = fopen($backup_file,'w+');
			fwrite($handle,$mybackup);
			fclose($handle);
			chmod($backup_file, 0777);
			
		}else{
			echo "Data belum dibackup data akan dibackup pada tanggal : ".$data['jadwal'];
		}

	}else{

		echo "Jadwal Backup tidak.";

	}

	

}

?>