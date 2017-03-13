<?php

require './config/conn.php';

$url = "http://localhost/project_blk/";
$icon = "http://localhost/project_blk/user/libs/photos/icon_blk.png";

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

function getStafByID($id){

	$query = "SELECT * FROM staf_blk WHERE stafID='$id'";
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

function getAllKejuruan(){

        $query = "SELECT gelombang.idGelombang AS GelombangID, gelombang.syarat AS Syarat, gelombang.keterangan AS Status, kejuruan.id_kejuruan AS KejuruanID,kejuruan.nama_kejuruan AS KejuruanNama, kejuruan.maxKuota AS MaxKuota  FROM gelombang INNER JOIN kejuruan ON gelombang.idKejuruan=kejuruan.id_kejuruan ORDER BY Status DESC";
        $sql = mysql_query($query);
        $data = array();
        while ($result = mysql_fetch_array($sql)) {
        	$data[] = $result;
        }

        return $data;
}

function getAllList($stafID){

	$query = "SELECT * FROM materi WHERE stafID='$stafID'";
	$sql = mysql_query($query);
	$data = array();
	while ($result = mysql_fetch_array($sql)) {
		$data[] = $result;
	}

	return $data;

}

function getMateriByID($materiID){

	$query = "SELECT * FROM materi WHERE materiID='$materiID'";
	$sql = mysql_query($query);
	$data = array();
	while ($result = mysql_fetch_array($sql)) {
		$data[] = $result;
	}

	return $data;

}

function stafNama($stafID){

	$query = "SELECT nama FROM staf_blk WHERE stafID='$stafID'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama'];

}

function getPesertaByKejuruan(){

      $sql = "SELECT peserta.nama AS NAMA, kejuruan.nama_kejuruan AS KEJURUAN FROM peserta, kejuruan WHERE peserta.id_kejuruan = kejuruan.id_kejuruan ORDER BY KEJURUAN";
      $query = mysql_query($sql);
      $data = array();
      while ($result = mysql_fetch_assoc($query)) {
            $data[] = $result;
      }

      return $data;

}

function getStafByKejuruan(){

      $sql = "SELECT staf_blk.nama AS STAF_NAMA, kejuruan.nama_kejuruan AS KEJURUAN FROM staf_blk, kejuruan WHERE staf_blk.id_kejuruan = kejuruan.id_kejuruan";
      $query = mysql_query($sql);
      $data = array();
      while ($result = mysql_fetch_assoc($query)) {
            $data[] = $result;
      }

      return $data;

}

function getPesertaByStaf(){

      $sql = "SELECT peserta.nama AS PESERTA, kejuruan.nama_kejuruan AS KEJURUAN, staf_blk.nama AS STAF FROM peserta JOIN kejuruan ON peserta.id_kejuruan = kejuruan.id_kejuruan JOIN staf_blk ON staf_blk.id_kejuruan = kejuruan.id_kejuruan ORDER BY STAF";
      $query = mysql_query($sql);
      $data = array();
      while ($result = mysql_fetch_assoc($query)) {
            $data[] = $result;
      }

      return $data;

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


?>