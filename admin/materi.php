<?php 
session_start();
require './config/function.php';

$materi = daftarMateri();

if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

require './templates/_materiContainer.php';

/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>