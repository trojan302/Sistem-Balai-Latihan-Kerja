<?php
session_start();
if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

require './config/function.php';
$data = getContact();

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

require './templates/_contactPage.php';

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>