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

			header('Location: http://localhost/project_blk/v.1.0.3/staf/index');	

		}else{

			$_SESSION['stafID'] = $arr['stafID'];

			header('Location: http://localhost/project_blk/v.1.0.3/pimpinan/index');

		}
		
	} else {
		header('Location: http://localhost/project_blk/v.1.0.3/loginStaf?err=' . urlencode('You dan\'t have permission!'));
	}

} else {
	header('Location: http://localhost/project_blk/v.1.0.3/loginStaf?err=' . urlencode('You dan\'t have permission!'));
}

?>