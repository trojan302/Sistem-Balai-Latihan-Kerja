<?php 
session_start();
require './config/function.php';

$peserta = getPeserta($_SESSION['id_peserta']);
$materi = daftarMateri();

if (!isset($_SESSION['id_peserta'])) {
	header('Location: ../index');
}

require './templates/header2.php';
require './templates/materi-container.php';
require './templates/footer.php';
?>