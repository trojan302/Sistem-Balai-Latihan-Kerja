<?php

require './config/conn.php';

$url = "http://localhost/project_blk/v.1.0.3/";
$icon = "http://localhost/project_blk/v.1.0.3/libs/photos/icon_blk.png";

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

function __generatorID($id_kejuruan){

      $sql = "SELECT CONCAT(LEFT(kejuruan.nama_kejuruan, 2),'-',DATE_FORMAT(peserta.tanggalDaftar, '%Y-%d'),peserta.id_peserta) AS ID_DAFTAR FROM kejuruan INNER JOIN peserta ON kejuruan.id_kejuruan = peserta.id_kejuruan WHERE kejuruan.id_kejuruan='$id_kejuruan'";
      $query = mysql_query($sql);
      $result = mysql_fetch_assoc($query);

      return strtoupper($result['ID_DAFTAR']);

}

function getPesertaByKejuruan(){

      $sql = "SELECT peserta.nama AS NAMA, kejuruan.nama_kejuruan AS KEJURUAN, peserta.status_peserta AS STATUS, peserta.id_kejuruan AS ID_KEJURUAN, peserta.id_peserta AS ID_PESERTA, DATE_FORMAT(peserta.tanggalDaftar, '%Y') AS TAHUN FROM peserta, kejuruan WHERE peserta.id_kejuruan = kejuruan.id_kejuruan ORDER BY TAHUN DESC";
      $query = mysql_query($sql);
      $data = array();
      while ($result = mysql_fetch_assoc($query)) {
            $data[] = $result;
      }

      return $data;

}

?>