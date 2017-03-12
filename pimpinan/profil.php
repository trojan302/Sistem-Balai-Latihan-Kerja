<?php 
session_start();
require './config/function.php';

$data = profilBlk();

$staf = getStafByID($_SESSION['stafID']);

if (!isset($_SESSION['stafID'])) {
	header('Location: ../index');
}

require './templates/header2.php';
require './templates/profil-container.php';
require './templates/footer.php';
?>