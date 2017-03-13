<?php 
session_start();
require './conn.php';

if (isset($_POST['loginStaf'])) {
	
	$usernameOrEmail = $_POST['usernameOrEmail'];
	$password = $_POST['password'];

	$query 	= "SELECT * FROM staf_blk WHERE username = '$usernameOrEmail' AND password = md5('$password') ";
	$sql 	= mysql_query($query);
	$data 	= mysql_num_rows($sql);

	if ($data) {

		$arr = mysql_fetch_assoc($sql);

		if ($arr['jabatan'] == 'instruktur') {

			$_SESSION['stafID'] = $arr['stafID'];

			header('Location: ../staf/index');	

		}else{

			$_SESSION['stafID'] = $arr['stafID'];

			header('Location: ../pimpinan/index');

		}
		
	} else {
		header('Location: ../loginStaf?err=' . urlencode('You dan\'t have permission!'));
	}

} else {
	header('Location: ../loginStaf?err=' . urlencode('You dan\'t have permission!'));
}

?>