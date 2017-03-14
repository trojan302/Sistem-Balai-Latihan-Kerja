<?php
session_start();

require './config/function.php';
require './dataBackups.php';

if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

$listBackup = listBackup();

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

if (isset($_GET['listBackup'])) {
	require './templates/_listBackup.php';
}else if (isset($_GET['restore'])) {
	require './templates/_restore.php';
}else{
	require './templates/_backupDatabase.php';
}

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>