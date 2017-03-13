<?php
session_start();

require './config/function.php';

if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

$rowStaf = rowStaf();
$kejuruanData = kejuruanData();
$getStaf = getStaf();
$no=1;

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */
if (isset($_GET['_tambahStaf'])) {
	require './templates/_tambahStaf.php';
}else if(isset($_GET['_editStaf'])){
	$data = getStafByID($_GET['_editStaf']);
	require './templates/_editStaf.php';
}else{
	require './templates/_staf.php';
}

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>