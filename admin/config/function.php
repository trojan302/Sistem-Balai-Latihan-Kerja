<?php

require './config/conn.php';

define('URL', 'http://anonymous/project_blk/admin/');


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
		
		header('Location: http://anonymous/project_blk/admin/users');

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

?>