<?php 
session_start();
require './config/function.php';

$peserta = getPeserta($_SESSION['id_peserta']);

$data = profilBlk();

if (!isset($_SESSION['id_peserta'])) {
	header('Location: ../index');
}

require './templates/header2.php';
require './templates/profil-container.php';
require './templates/footer.php';
?>