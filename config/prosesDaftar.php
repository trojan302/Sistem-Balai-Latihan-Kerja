<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBMS', 'project_blk');


mysql_connect(HOST,USER,PASS)or die('Server not connected!');
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

	$tahunDaftar 		= date('Y');

	$sqlCheck = "SELECT nama, nik, DATE_FORMAT(tanggalDaftar, '%Y') AS Mendaftar FROM peserta WHERE nama='$nama' OR (nama LIKE '%$nama%');";
	$queryRes = mysql_query($sqlCheck);
	$rows = mysql_num_rows($queryRes);
	$result = mysql_fetch_assoc($queryRes);

	if ($nama == $result['nama'] || $nik == $result['nik'] || $tahunDaftar == $result['Mendaftar']) {

		$error = "Pendaftaran Gagal! Peserta dengan nama : ".$result['nama'].", $nama, etc sudah mendaftar pada : $tanggalDaftar.";
		header('Location: ../pendaftaran.php?err='. urlencode($error));

	}else{
		
			$query = "INSERT INTO `peserta`(`id_peserta`, `nama`, `id_kejuruan`, `nik`, `ttl`, `jk`, `id_agama`, `skawin`, `id_pendidikan`, `alamat`, `telp`, `p_kursus`, `p_kerja`, `nama_ortu`, `pk_ortu`, `alamat_ortu`, `tanggalDaftar`, `status_peserta`) VALUES ('','$nama','$kejuruan','$nik','$ttl','$jenis_kelamin','$agama','$skawin','$pendidikan','$alamat','$telepon','$pkursus','$pkerja','$namaOrtu','$pkOrtu','$alamatOrtu','$tanggalDaftar','$statusPeserta')";

			$sql = mysql_query($query);

			if ($sql) {
				header('Location: ../pendaftaran.php?success='. urlencode('Registration Successfully...'));
			} else {
				header('Location: ../pendaftaran.php?err='. urlencode('Registration falilure!!!'));
			}

	}

}


?>