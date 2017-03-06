<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBMS', 'project_blk');


$conn = mysql_connect(HOST,USER,PASS)or die('Server not connected!');
mysql_select_db(DBMS)or die('Database not selected!');

if (isset($_REQUEST['daftar'])) {
	
	$nama 				= $_REQUEST['nama'];
	$nik 				= $_REQUEST['nik'];
	$kejuruan			= $_REQUEST['kejuruan'];
	$ttl 				= $_REQUEST['ttl'];
	$jenis_kelamin 		= $_REQUEST['jenis_kelamin'];
	$skawin		 		= $_REQUEST['skawin'];
	$pendidikan	 		= $_REQUEST['pendidikan'];
	$alamat		 		= $_REQUEST['alamat'];
	$telepon	 		= $_REQUEST['telepon'];
	$agama		 		= $_REQUEST['agama'];
	$pkursus	 		= $_REQUEST['pkursus'];
	$pkerja		 		= $_REQUEST['pkerja'];
	$namaOrtu	 		= $_REQUEST['namaOrtu'];
	$pkOrtu		 		= $_REQUEST['pkOrtu'];
	$alamatOrtu	 		= $_REQUEST['alamatOrtu'];
	$statusPeserta		= 0;
	$tanggalDaftar      = date('Y-m-d');

	$username		 	= $_REQUEST['username'];
	$password	 		= $_REQUEST['password'];

	$query1 = "INSERT INTO users (id_peserta,username,password,created) VALUES (LAST_INSERT_ID(),'$username',md5('$password'),'$tanggalDaftar')";

	$sql1 = mysql_query($query1);

	$query = "INSERT INTO `peserta`(`id_peserta`, `nama`, `id_kejuruan`, `nik`, `ttl`, `jk`, `id_agama`, `skawin`, `id_pendidikan`, `alamat`, `telp`, `p_kursus`, `p_kerja`, `nama_ortu`, `pk_ortu`, `alamat_ortu`, `tanggalDaftar`, `status_peserta`) VALUES ('','$nama','$kejuruan','$nik','$ttl','$jenis_kelamin','$agama','$skawin','$pendidikan','$alamat','$telepon','$pkursus','$pkerja','$namaOrtu','$pkOrtu','$alamatOrtu','$tanggalDaftar','$statusPeserta')";

	$sql = mysql_query($query);

	if ($sql && $sql1) {
		header('Location: ../pendaftaran.php?success='. urlencode('Registration Successfully...'));
	} else {
		header('Location: ../pendaftaran.php?err='. urlencode('Registration falilure!!!'));
	}

}


?>