<?php
session_start();
require './config/conn.php';

if (isset($_POST['login'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE emailAdmin = '$email' AND password = md5('$password')";
    $sql = mysql_query($query);

	if (mysql_num_rows($sql) > 0) {

		$data = mysql_fetch_assoc($sql);
		
		$_SESSION['login'] 			= $email;
		$_SESSION['idAdmin'] 		= $data['idAdmin'];
		$_SESSION['namaAdmin'] 		= $data['namaAdmin'];
		$_SESSION['telpAdmin'] 		= $data['telpAdmin'];
		$_SESSION['alamatAdmin'] 	= $data['alamatAdmin'];
		$_SESSION['permission'] 	= $data['permission'];

		header('Location: ./index');

	}else{
		header('Location: http://localhost/project_blk/v.1.0.3/admin/login.php?err=' . urlencode('You dan\'t have permission!'));
	}

}

?>