<?php 
session_start();

require './config/function.php';

$lokers = getAllLoker();

$staf = getStafByID($_SESSION['stafID']);

if (!isset($_SESSION['stafID'])) {
	header('Location: ../index');
}

require './templates/header2.php';
require './templates/loker-container.php';
require './templates/footer.php';
?>