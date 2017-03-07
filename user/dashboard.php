<?php 
session_start();
require './config/function.php';

$peserta = getPeserta($_SESSION['id_peserta']);
$lokers = getAllLoker();

if (!isset($_SESSION['id_peserta'])) {
	header('Location: ../index');
}

require './templates/header2.php';

if (isset($_GET['profile'])) {

	require './templates/dashboard-profile-container.php';

}else if(isset($_GET['bukti_daftar']) && isset($_GET['peserta_id'])){

	require './templates/dashboard-bukti-container.php';

}else{

	require './templates/dashboard-container.php';

}

require './templates/footer.php';
?>