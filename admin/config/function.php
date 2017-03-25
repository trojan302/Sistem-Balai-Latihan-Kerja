<?php

require './config/conn.php';

$url = "http://localhost/project_blk/";
$icon = "http://localhost/project_blk/libs/photos/icon_blk.png";

function maxKuota($id){

	$query 	= "SELECT * FROM kejuruan WHERE id_kejuruan = '$id'";
	$sql 	= mysql_query($query);
	$result = mysql_fetch_array($sql);

	return $result['maxKuota'];

}

function pesertaKejuruan($id){

	$query 	= "SELECT id_kejuruan FROM peserta WHERE id_kejuruan = '$id'";
	$sql 	= mysql_query($query);
	$result = mysql_num_rows($sql);

	return $result;

}

function terdaftar($idKejuruan,$status){

	global $count;
	$query 	= mysql_query("SELECT * FROM peserta WHERE id_kejuruan= '$idKejuruan' AND status_peserta = '$status'");
	$result = mysql_fetch_array($query);

	if ($result['status_peserta'] == 0) {
		$count = 0;
	} else {
		$count = mysql_num_rows($query);
	}

	return $count;

}

function mendaftar($idKejuruan){

	$query 	= mysql_query("SELECT * FROM peserta WHERE id_kejuruan= '$idKejuruan'");
	$result = mysql_fetch_array($query);
	$count = mysql_num_rows($query);

	return $count;
}

function belumTerdaftar($idKejuruan,$status){

	$query 	= mysql_query("SELECT * FROM peserta WHERE id_kejuruan= '$idKejuruan' AND status_peserta = '$status'");
	$result = mysql_fetch_array($query);
	$count = mysql_num_rows($query);

	return $count;

}

function kejuruanDibuka($keterangan) {

	$query = "SELECT gelombang.idGelombang AS GelombangID, gelombang.keterangan AS Status, kejuruan.id_kejuruan AS KejuruanID,kejuruan.nama_kejuruan AS KejuruanNama  FROM gelombang INNER JOIN kejuruan ON gelombang.idKejuruan=kejuruan.id_kejuruan WHERE gelombang.keterangan='$keterangan' ORDER BY KejuruanNama";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}


function getAllUsers(){

	$query = "SELECT peserta.id_peserta AS idPeserta, peserta.alamat AS PesertaAlamat, peserta.telp AS PesertaTelepon, peserta.nama AS PesertaNama, users.idUser AS UserID, users.id_peserta AS PesertaID, users.username AS Username, users.created AS DateCreated FROM peserta INNER JOIN users ON peserta.id_peserta = users.id_peserta ORDER BY PesertaNama";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function usersTotal(){

	$query = "SELECT * FROM users";
    $sql = mysql_query($query);
    $result = mysql_num_rows($sql);

    return $result;

}

function deleteUser($id) {

	$query = "DELETE FROM users WHERE idUser = '$id'";
	$sql = mysql_query($query);

	if ($sql) {
		
		header('Location: http://localhost/project_blk/admin/users');

	}

}

if (isset($_GET['url']) == 'delete' && $_GET['id']) {
	
	$data = deleteUser($_GET['id']);

}

function pesertaTotal(){

	$query = "SELECT * FROM peserta";
    $sql = mysql_query($query);
    $result = mysql_num_rows($sql);

    return $result;

}

function getAllPeserta(){

	$query = "SELECT * FROM peserta ORDER BY nama";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function getCurrentPeserta($id){

	$query = "SELECT * FROM peserta WHERE id_peserta = '$id' ";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function getKejuruan($id){

	$query = "SELECT nama_kejuruan FROM kejuruan WHERE id_kejuruan = '$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama_kejuruan'];

}

function getAllKejuruan($id){

	$query = "SELECT * FROM kejuruan WHERE id_kejuruan != '$id'";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function getAgama($id){

	$query = "SELECT nama FROM agama WHERE id_agama = '$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama'];

}

function getAllAgama($id){

	$query = "SELECT * FROM agama WHERE id_agama != '$id'";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function getPendidikan($id){

	$query = "SELECT nama FROM pendidikan WHERE id_pendidikan = '$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama'];

}

function getAllPendidikan($id){

	$query = "SELECT * FROM pendidikan WHERE id_pendidikan != '$id'";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function getAllGelombang(){

	$query = "SELECT gelombang.idGelombang AS GelombangID, gelombang.keterangan AS Status, gelombang.kuota AS GelombangKuota, gelombang.syarat AS GelombangSyarat, kejuruan.id_kejuruan AS KejuruanID,kejuruan.nama_kejuruan AS KejuruanNama, kejuruan.maxKuota AS MaxKuota  FROM gelombang INNER JOIN kejuruan ON gelombang.idKejuruan=kejuruan.id_kejuruan ORDER BY Status DESC";
	$sql = mysql_query($query);
	$data = array();
	while ($result = mysql_fetch_assoc($sql)) {
		$data[] = $result;
	}

	return $data;

}

function getCurrentGelombang($GelombangID){

	$query = "SELECT gelombang.idGelombang AS GelombangID, gelombang.nama AS GelombangNama, gelombang.kuota AS GelombangKuota, gelombang.syarat AS GelombangSyarat, gelombang.keterangan AS Status, kejuruan.id_kejuruan AS KejuruanID,kejuruan.nama_kejuruan AS KejuruanNama, kejuruan.maxKuota AS MaxKuota  FROM gelombang INNER JOIN kejuruan ON gelombang.idKejuruan=kejuruan.id_kejuruan WHERE gelombang.idGelombang = '$GelombangID' ";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}


function getSlide1(){

	$query = "SELECT * FROM `slides` WHERE idSlides=5";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getSlide2(){

	$query = "SELECT * FROM `slides` WHERE idSlides=6";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getSlide3(){

	$query = "SELECT * FROM `slides` WHERE idSlides=7";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getRowOfFeatures(){

	$query = "SELECT * FROM `features`";
	$sql = mysql_query($query);
	$result = mysql_num_rows($sql);

	return $result;

}

function getFeatures(){

	$query = "SELECT * FROM `features`";
	$sql = mysql_query($query);
	$data = array();
	while ($result = mysql_fetch_assoc($sql)) {
		$data[] = $result;
	}

	return $data;

}

function getCurrentFeatures($id){

	$query = "SELECT * FROM `features` WHERE idFeatures='$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getAllVisiMisi(){

	$query = "SELECT * FROM `visimisi`";
	$sql = mysql_query($query);
	$data = array();
	while ($result = mysql_fetch_assoc($sql)) {
		$data[] = $result;
	}

	return $data;

}

function getCurrentVisiMisi($id){

	$query = "SELECT * FROM `visimisi` WHERE idVisiMisi='$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getProfil(){

	$query = "SELECT * FROM `profil`";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getContact(){

	$query = "SELECT * FROM `contact`";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getAllLoker(){

	$query = "SELECT * FROM `loker`";
	$sql = mysql_query($query);
	$data = array();
	while ($result = mysql_fetch_assoc($sql)) {
		$data[] = $result;
	}

	return $data;

}

function getCurrentLoker($id){

	$query = "SELECT * FROM `loker` WHERE idLoker='$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function getRowOfLoker(){

	$query = "SELECT * FROM `loker`";
	$sql = mysql_query($query);
	$result = mysql_num_rows($sql);

	return $result;

}

function checkUser($id){

	$query = "SELECT * FROM users WHERE id_peserta='$id'";
	$sql = mysql_query($query);

	if (mysql_num_rows($sql) > 0) {
		$data = "exists";
	}else{
		$data = "not exists";
	}

	return $data;

}

function hitCounter(){

	$sql = "SELECT * FROM counter ORDER BY date_created DESC";
	$query = mysql_query($sql);
	$result = mysql_num_rows($query);

	return $result;

}

function userStatistic(){

	$sql = "SELECT * FROM counter ORDER BY date_created DESC";
	$query = mysql_query($sql);
	$data = array();
	while ($result = mysql_fetch_assoc($query)) {
		$data[] = $result;
	}

	return $data;

}

function jumlahMendaftar(){

	$sql = "SELECT * FROM peserta WHERE status_peserta='0'";
	$query = mysql_query($sql);
	$result = mysql_num_rows($query);

	return $result;

}

function jumlahTerdaftar(){

	$sql = "SELECT * FROM peserta WHERE status_peserta!='0'";
	$query = mysql_query($sql);
	$result = mysql_num_rows($query);

	return $result;

}

function rowStaf(){
	$sql = "SELECT * FROM staf_blk";
	$query = mysql_query($sql);
	$result = mysql_num_rows($query);

	return $result;
}

function kejuruanData(){

	$sql = "SELECT id_kejuruan, nama_kejuruan FROM kejuruan ORDER BY nama_kejuruan";
	$query = mysql_query($sql);
	$data = array();
	while ($result = mysql_fetch_assoc($query)) {
		$data[] = $result;
	}

	return $data;

}

function getStaf(){

	$sql = "SELECT * FROM staf_blk ORDER BY nama";
	$query = mysql_query($sql);
	$data = array();
	while ($result = mysql_fetch_assoc($query)) {
		$data[] = $result;
	}

	return $data;

}

function getStafByID($id){

	$sql = "SELECT * FROM staf_blk WHERE stafID='$id'";
	$query = mysql_query($sql);
	$data = array();
	while ($result = mysql_fetch_assoc($query)) {
		$data[] = $result;
	}

	return $data;

}

function getStafKejuruanByID($id){

	$sql = "SELECT * FROM staf_blk WHERE stafID='$id'";
	$query = mysql_query($sql);
	$data = array();
	while ($result = mysql_fetch_assoc($query)) {
		$data[] = $result;
	}

	return $data;

}

function deletePeserta($id_peserta){

	$query = "DELETE FROM peserta WHERE id_peserta = '$id_peserta'";
	$sql = mysql_query($query);
	$query2 = "DELETE FROM users WHERE id_peserta = '$id_peserta'";
	$sql2 = mysql_query($query2);

	if ($sql && sql2) {
		
		header('Location: http://localhost/project_blk/admin/peserta');

	}

}

function deleteStaf($stafID){

	$query = "DELETE FROM staf_blk WHERE stafID = '$stafID'";
	$sql = mysql_query($query);

	if ($sql) {
		
		header('Location: http://localhost/project_blk/admin/staf');

	}

}

function namaKejuruan($id_kejuruan){

	$sql = "SELECT nama_kejuruan FROM kejuruan WHERE id_kejuruan='$id_kejuruan'";
	$query = mysql_query($sql);
	$result = mysql_fetch_assoc($query);

	return $result['nama_kejuruan'];

}

function imageMateri($id_kejuruan){

	$image='';

	if (namaKejuruan($id_kejuruan) == 'Operator Komputer') {

		$image .= '../libs/materi-image/operator-komputer.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Mesin Produksi') {

		$image .= '../libs/materi-image/mesin-produksi.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Las Listrik') {

		$image .= '../libs/materi-image/las-listrik.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Teknisi Handphone') {

		$image .= '../libs/materi-image/teknisi-handphone.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Mobil Bensin') {

		$image .= '../libs/materi-image/mobil-bensin.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Administrasi Kantor') {

		$image .= '../libs/materi-image/administrasi-kantor.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Sepeda Motor') {

		$image .= '../libs/materi-image/sepeda-motor.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Sablon') {

		$image .= '../libs/materi-image/sablon.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Meubelair') {

		$image .= '../libs/materi-image/mebel.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Processing (Boga)') {

		$image .= '../libs/materi-image/processing-boga.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Teknik Pendingin') {

		$image .= '../libs/materi-image/teknik-pendingin.jpg';
		
	}elseif (namaKejuruan($id_kejuruan) == 'Menjahit') {

		$image .= '../libs/materi-image/menjahit.jpg';
		
	}else{
		return false;
	}

	return $image;

}

function base64_encode_image ($imagefile) {

    $imgtype = array('jpg', 'gif', 'png');
    $filename = file_exists($imagefile) ? htmlentities($imagefile) : die('Image file name does not exist');
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    if (in_array($filetype, $imgtype)){
        $imgbinary = fread(fopen($filename, "r"), filesize($filename));
    } else {
        die ('Invalid image type, jpg, gif, and png is only allowed');
    }
    return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
}

function daftarMateri(){

	$sql = "SELECT materi.judulMateri AS Materi, materi.materiID AS ID_MATERI, materi.deskripsi AS Deskripsi, materi.fileMateri AS FileMateri, materi.extension AS EXTENSION, staf_blk.nama AS NamaStaf, staf_blk.id_kejuruan AS StafKejuruan, materi.uploaded AS Upload FROM materi INNER JOIN staf_blk ON materi.stafID = staf_blk.stafID ORDER BY materi.materiID DESC";
	$query = mysql_query($sql);
	$data = array();
	while ($result = mysql_fetch_assoc($query)) {
		$data[] = $result;
	}

	$list = array();

	foreach ($data as $materiImage) {
		
		$list[] = array(
			"idMateri" => $materiImage['ID_MATERI'],
			"judulMateri" => $materiImage['Materi'],
			"deskripsi" => $materiImage['Deskripsi'],
			"fileMateri" => $materiImage['FileMateri'],
			"stafNama" => $materiImage['NamaStaf'],
			"extension" => $materiImage['EXTENSION'],
			"kejuruan" => namaKejuruan($materiImage['StafKejuruan']),
			"upload" => $materiImage['Upload'],
			"imageMateri" => base64_encode_image(imageMateri($materiImage['StafKejuruan']))
		);

	}

	return $list;

}

function listBackup(){

	$sql = "SELECT * FROM db_backup";
	$query = mysql_query($sql);
	$data = array();
	while($result = mysql_fetch_assoc($query)){
		$data[] = $result;
	}

	return $data;

}

function Permission($filename){

	$perms = fileperms('database/'.$filename);

	if (($perms & 0xC000) == 0xC000) {
	    // Socket
	    $info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	    // Symbolic Link
	    $info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	    // Regular
	    $info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	    // Block special
	    $info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	    // Directory
	    $info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	    // Character special
	    $info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	    // FIFO pipe
	    $info = 'p';
	} else {
	    // Unknown
	    $info = 'u';
	}

	// Hanya Ownner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	            (($perms & 0x0800) ? 's' : 'x' ) :
	            (($perms & 0x0800) ? 'S' : '-'));

	// Hanya Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	            (($perms & 0x0400) ? 's' : 'x' ) :
	            (($perms & 0x0400) ? 'S' : '-'));

	// Semuanya
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	            (($perms & 0x0200) ? 't' : 'x' ) :
	            (($perms & 0x0200) ? 'T' : '-'));

	if ($info == 'drw-------') {
	 return "$info";
	}else if($info == 'drw-r--r--'){
	 return "$info";
	}else if($info == 'drwxr-xr-x'){
	 return "$info";
	}else if($info == 'drwxr-x---'){
	 return "$info";
	}else{
	 return "$info";
	} 

}

?>