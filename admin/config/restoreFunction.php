<?php 

function IMPORT_TABLES($host,$user,$pass,$dbname, $file_or_contents){

	set_time_limit(3000);

	$SQL_CONTENT = (strlen($file_or_contents) > 300 ?  $file_or_contents : file_get_contents($file_or_contents)  ); 

	$allLines = explode("\n",$SQL_CONTENT); 

	$mysqli = new mysqli($host, $user, $pass, $dbname); 

	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 
	
	$zzzzzz = $mysqli->query('SET foreign_key_checks = 0');	        
	preg_match_all("/\nCREATE TABLE(.*?)\`(.*?)\`/si", "\n". $SQL_CONTENT, $target_tables); 

	foreach ($target_tables[2] as $table){
		$mysqli->query('DROP TABLE IF EXISTS '.$table);
	}         

	$zzzzzz = $mysqli->query('SET foreign_key_checks = 1');    
	$mysqli->query("SET NAMES 'utf8'");	

	$templine = '';	// variabel temporer, untuk membuat query

	foreach ($allLines as $line)	{											// loop setiap baris
		if (substr($line, 0, 2) != '--' && $line != '') {
		$templine .= $line; 	// Jika bukan comment, tambahkan ke baris saat ini
			if (substr(trim($line), -1, 1) == ';') {		// Jika ada (;) semicolon, berarti akhir dari query
				if(!$mysqli->query($templine)){ 
					print('Error pembuatan query <pre>' . $templine . '\': ' . $mysqli->error . '</pre><br /><br />');  
				}  

				$templine = ''; // set variable menjadi kosong lagi untuk mencetak query selanjurnya seetelah (;) semicolon
			}
		}
	}

	return true;
}	


?>