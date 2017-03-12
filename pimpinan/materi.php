<?php 
session_start();
require './config/function.php';

$staf = getStafByID($_SESSION['stafID']);

if (!isset($_SESSION['stafID'])) {
	header('Location: ../index');
}

require './templates/header2.php';
require './templates/materi-container.php';
require './templates/footer.php';
?>