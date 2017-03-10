<?php

require './config/conn.php';

$url = "http://anonymous/project_blk/";
$icon = "http://anonymous/project_blk/user/libs/photos/icon_blk.png";

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

function rowOfSlide(){

	$query = "SELECT * FROM slides";
	$sql = mysql_query($query);

	$rows = mysql_num_rows($sql);

	return $rows;

}

function slideShow() {

	$query = "SELECT * FROM slides";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function visiMisi(){

	$query = "SELECT * FROM visimisi";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function features(){

	$query = "SELECT * FROM features";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function profilBlk(){

	$query = "SELECT * FROM profil";
    $sql = mysql_query($query);
    $data = array();
    while ($result = mysql_fetch_assoc($sql)){
    	$data[] = $result;
    }

    return $data;

}

function authDaftar($nama, $tanggalDaftar){

	$query = "SELECT * FROM `peserta` WHERE tanggalDaftar='$tanggalDaftar' AND nama='$nama'";
	$sql = mysql_query($query);
	$data = array();
	while ($res = mysql_fetch_assoc($sql)) {
		
		$data[] = $res;

	}

	return $data;

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

function getPeserta($id){

	$query = "SELECT * FROM peserta WHERE id_peserta='$id'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}

function namaKejuruan($id_kejuruan){

	$sql = "SELECT nama_kejuruan FROM kejuruan WHERE id_kejuruan='$id_kejuruan'";
	$query = mysql_query($sql);
	$result = mysql_fetch_assoc($query);

	return $result['nama_kejuruan'];

}

function namaAgama($id_agama){

	$sql = "SELECT nama FROM agama WHERE id_agama='$id_agama'";
	$query = mysql_query($sql);
	$result = mysql_fetch_assoc($query);

	return $result['nama'];

}

function pendidikan($id_pendidikan){

	$sql = "SELECT nama FROM pendidikan WHERE id_pendidikan='$id_pendidikan'";
	$query = mysql_query($sql);
	$result = mysql_fetch_assoc($query);

	return $result['nama'];

}

function __generatorID($id_kejuruan){

      $sql = "SELECT CONCAT(LEFT(kejuruan.nama_kejuruan, 2),'-',DATE_FORMAT(peserta.tanggalDaftar, '%Y-%d'),peserta.id_peserta) AS ID_DAFTAR FROM kejuruan INNER JOIN peserta ON kejuruan.id_kejuruan = peserta.id_peserta WHERE kejuruan.id_kejuruan='$id_kejuruan'";
      $query = mysql_query($sql);
      $result = mysql_fetch_assoc($query);

      return strtoupper($result['ID_DAFTAR']);

}

function getGelombang($id_kejuruan){

	$query = "SELECT * FROM gelombang WHERE idKejuruan='$id_kejuruan'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result;

}


?>