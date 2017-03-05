<?php
session_start();
if (!isset($_SESSION['login'])) {
	
	header('Location: ./login');

}

$data = array(
	"kejuruan" => array("Operator Komputer","Menjahit","Teknik Pendingin","Prosessing Boga","Mesin Produksi","Las Listrik","Administrasi Kantor","Teknisi Handphone","Mobil Bensin","Sepeda Motor","Sablon","Meubelair"),
	"minat" => array(211,112,110,87,99,672,122,87,192,100,75,114)
);
$no=1;

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