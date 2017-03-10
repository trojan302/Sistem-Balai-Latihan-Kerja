<?php
session_start();
require './config/function.php';

$staf = getStafByID($_SESSION['stafID']);

$rows = rowOfSlide();
$slides = slideShow();
$visiMisi = visiMisi();
$features = features();


if (!isset($_SESSION['stafID'])) {
	header('Location: ../index');
}

require './templates/header.php';
require './templates/carousel.php';
require './templates/visi-misi.php';
require './templates/feature-blk.php';
require './templates/footer.php';
?>