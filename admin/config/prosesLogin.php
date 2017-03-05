<?php 
session_start();
// require 'conn.php';

if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	// $query 	= "SELECT * FROM users WHERE username = '$username' AND password = md5('$password') ";
	// $sql 	= mysql_query($query);
	// $data 	= mysql_num_rows($sql);

	if ($username == 'admin' && $password == 'admin') {

		// $field = mysql_fetch_assoc($sql);

		$_SESSION['login'] = $username;

		header('Location: ../');
		
	} else {
		header('Location: ../login.php?err=' . urlencode('You dan\'t have permission!'));
	}

}

?>