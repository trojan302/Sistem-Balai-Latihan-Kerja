<?php 
session_start();
require 'conn.php';

if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query 	= "SELECT * FROM users WHERE username = '$username' AND password = md5('$password') ";
	$sql 	= mysql_query($query);
	$data 	= mysql_num_rows($sql);

	if ($data) {

		$field = mysql_fetch_assoc($sql);

		$_SESSION['id_peserta'] = $field['id_peserta'];

		header('Location: http://localhost/project_blk/v.1.0.3/user/index');
		
	} else {
		header('Location: http://localhost/project_blk/v.1.0.3/login?err=' . urlencode('You dan\'t have permission!'));
	}

} else {
	header('Location: http://localhost/project_blk/v.1.0.3/login?err=' . urlencode('You dan\'t have permission!'));
}

?>