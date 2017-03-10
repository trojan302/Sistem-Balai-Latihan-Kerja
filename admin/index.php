<?php
session_start();

require './config/function.php';

if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

$hitNumber = hitCounter();
$pesertaTotal = pesertaTotal();
$jumlahMendaftar = jumlahMendaftar();
$jumlahTerdaftar = jumlahTerdaftar();

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

require './templates/_counter.php';
require './templates/_graphTrafic.php';
require './templates/_graphData.php';


/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>