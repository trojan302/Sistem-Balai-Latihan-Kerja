<?php 

require 'conn.php';
require 'restoreFunction.php';


if (isset($_POST['upload'])) {

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbms = $_POST['dbname'];
	$data = 'http://localhost/project_blk/admin/database/'.$_FILES['dataRestore']['name'];

	IMPORT_TABLES($host, $user, $pass, $dbms, $data);

	echo "<script>window.location.href='http://localhost/project_blk/admin/backups?restore=true'</script>";

}else{
	echo "<script>window.location.href='http://localhost/project_blk/admin/backups?restore=true'</script>";
}


?>