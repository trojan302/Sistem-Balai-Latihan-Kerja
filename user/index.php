<?php
session_start();
require './config/function.php';

$peserta = getPeserta($_SESSION['id_peserta']);

$rows = rowOfSlide();
$slides = slideShow();
$visiMisi = visiMisi();
$features = features();


if (!isset($_SESSION['id_peserta'])) {
	header('Location: ../index');
}

require './templates/header.php';
require './templates/carousel.php';
require './templates/visi-misi.php';
require './templates/feature-blk.php';
require './templates/footer.php';
?>