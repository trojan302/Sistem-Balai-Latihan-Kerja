<?php 

require 'conn.php';

echo "<pre>",var_dump($_POST).var_dump($_FILES),"</pre>";

$file = '../../libs/materi/'.str_replace('http://anonymous/project_blk/libs/materi/','', $_POST['filename']);

if (file_exists($file)) {
	echo "File sudah ada";
}else{
	echo "File tidak ada";
}


?>