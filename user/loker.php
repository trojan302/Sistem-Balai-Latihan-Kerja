<?php 
session_start();

require './config/function.php';

$peserta = getPeserta($_SESSION['id_peserta']);

$lokers = getAllLoker();

if (!isset($_SESSION['id_peserta'])) {
	header('Location: ../index');
}

require './templates/header2.php';
require './templates/loker-container.php';
require './templates/footer.php';
?>