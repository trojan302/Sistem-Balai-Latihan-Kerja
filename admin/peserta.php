<?php
session_start();
if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

require './config/function.php';

$data = getAllPeserta();
$no=1;

/* Cons Required! */
require './templates/_header.php';
require './templates/_sidebar.php';
/* End Cons Required! */

if (isset($_GET['lihat'])) {

	require './templates/_lihatPeserta.php';

}else if (isset($_GET['edit'])) {

	require './templates/_editPesertaTable.php';

}else{

	require './templates/_pesertaTable.php';

}


/* Cons Required! */
require './templates/_footer.php';
/* End Cons Required! */
?>