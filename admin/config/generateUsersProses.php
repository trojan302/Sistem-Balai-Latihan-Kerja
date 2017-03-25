<?php 

require './conn.php';

$id = $_GET['user'];

if (!isset($id)) {
	header('Location: http://localhost/project_blk/admin/peserta');
}

function generatorUsers($id){

	$query = "SELECT * FROM peserta WHERE id_peserta='$id'";
    $sql = mysql_query($query);
    $result = mysql_fetch_assoc($sql);

    $nama = $result['nama'];
    $tanggalDaftar = $result['tanggalDaftar'];
    $id_peserta = $result['id_peserta'];

    $exname = explode(" ", $nama);
	$uniq = str_replace("-", "", $tanggalDaftar);
	$username = $exname[0]."ID-".$uniq;
	$password = md5($username);
	$passnohash = $username;
	$date = date('Y-m-d');

	$data = array(
		'id_peserta' => $id_peserta,
		'username' => $username,
		'passnohash' => $passnohash,
		'password' => $password,
		'created' => date('Y-m-d')
	);

	return $data;

}

$data = generatorUsers($id);
// echo "<pre>",print_r($data),"</pre>";

$query = "INSERT INTO`users`(`idUser`,`id_peserta`,`username`,`password`,`passnohash`,`created`) VALUES ('','".$data['id_peserta']."','".$data['username']."','".$data['password']."','".$data['passnohash']."','".$data['created']."')";
$sql = mysql_query($query);

if ($sql) {
	header('Location: http://localhost/project_blk/admin/peserta');
	// die($sql);
}else{
	// die($sql);
	header('Location: http://localhost/project_blk/admin/peserta');
}


?>