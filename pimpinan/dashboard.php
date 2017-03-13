<?php 
session_start();
require './config/function.php';

$staf = getStafByID($_SESSION['stafID']);
$lokers = getAllLoker();
$kejuruan = getAllKejuruan();
$listmateri = getAllList($_SESSION['stafID']);
$getPesertaByKejuruan = getPesertaByKejuruan();
$getStafByKejuruan = getStafByKejuruan();
$getPesertaByStaf = getPesertaByStaf();

if (!isset($_SESSION['stafID'])) {
	header('Location: ../index');
}

require './templates/header2.php';

if (isset($_GET['profile'])) {

	require './templates/dashboard-profile-container.php';

}else if(isset($_GET['share_materi']) && isset($_GET['stafID'])){

	require './templates/dashboard-share-container.php';

}else if(isset($_GET['list_materi']) && isset($_GET['stafID'])){

	require './templates/dashboard-list-materi-container.php';

}else if (isset($_GET['lihat_materi']) && isset($_GET['materi'])) {
				
	require './templates/_lihatMateri.php';

}else if (isset($_GET['edit_materi']) && isset($_GET['staf'])) {
				
	require './templates/_editMateri.php';

}else if (isset($_GET['list_peserta']) && isset($_GET['staf_kejuruan'])) {
				
	require './templates/_listPeserta.php';

}else if (isset($_GET['list_peserta']) && isset($_GET['tampil_peserta']) == 'true') {
				
	require './templates/_semuaListPeserta.php';

}else if (isset($_GET['list_instruktur']) && isset($_GET['tampil_instruktur']) == 'true') {
				
	require './templates/_semuaListInstruktur.php';

}else if (isset($_GET['list_semua']) && isset($_GET['tampil_semua']) == 'true') {
				
	require './templates/_semuaList.php';

}else{

	require './templates/dashboard-container.php';

}

require './templates/footer.php';
?>