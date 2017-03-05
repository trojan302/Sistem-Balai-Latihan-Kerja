<?php
session_start();
if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

require './config/function.php';

$datas = getAllGelombang();

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

if (isset($_GET['edit'])) {
	require './templates/_editKejuruanData.php';
}else{
	require './templates/_kejuruanData.php';
}

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>