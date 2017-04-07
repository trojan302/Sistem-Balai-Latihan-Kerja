<?php
session_start();

require './config/function.php';

if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

$listBackup = listBackup();

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

require './templates/_backupDatabase.php';

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>