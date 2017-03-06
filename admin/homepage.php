<?php
session_start();
if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

require './config/function.php';

$slide1 = getSlide1();
$slide2 = getSlide2();
$slide3 = getSlide3();
$features = getFeatures();
$visimisi = getAllVisiMisi();
$no=1;
// echo "<pre>",print_r($features),"</pre>";
// die();

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

require './templates/_homePage.php';

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>