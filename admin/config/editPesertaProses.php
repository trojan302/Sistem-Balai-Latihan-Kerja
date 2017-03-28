<?php 

require './conn.php';

// echo "<pre>",print_r($_POST),"<pre>";

$nama 			= $_POST['nama'];
$kejuruan 		= $_POST['kejuruan'];
$nik 			= $_POST['nik'];
$ttl 			= $_POST['ttl'];
$jk 			= $_POST['gender'];
$agama 			= $_POST['agama'];
$skawin 		= $_POST['skawin'];
$pendidikan 	= $_POST['pendidikan'];
$telepon 		= $_POST['telepon'];
$status_peserta = $_POST['status_peserta'];
$alamat 		= $_POST['alamat'];
$p_kursus 		= $_POST['p_kursus'];
$p_kerja 		= $_POST['p_kerja'];
$nama_ortu 		= $_POST['nama_ortu'];
$pk_ortu 		= $_POST['pk_ortu'];
$alamat_ortu 	= $_POST['alamat_ortu'];
$tanggalDaftar 	= $_POST['tanggalDaftar'];
$id_peserta		= $_POST['id_peserta'];

$query = "UPDATE
		  `peserta`
		SET
		  `nama` ='$nama',
		  `id_kejuruan` ='$kejuruan',
		  `nik` ='$nik',
		  `ttl` ='$ttl',
		  `jk` ='$jk',
		  `id_agama` ='$agama',
		  `skawin` ='$skawin',
		  `id_pendidikan` ='$pendidikan',
		  `alamat` ='$alamat',
		  `telp` ='$telepon',
		  `p_kursus` ='$p_kursus',
		  `p_kerja` ='$p_kerja',
		  `nama_ortu` ='$nama_ortu',
		  `pk_ortu` ='$pk_ortu',
		  `alamat_ortu` ='$alamat_ortu',
		  `tanggalDaftar` ='$tanggalDaftar',
		  `status_peserta` ='$status_peserta'
		WHERE
		  `id_peserta` ='$id_peserta'";
$sql = mysql_query($query);

if ($sql) {

	header('Location: http://localhost/project_blk/v.1.0.3/admin/peserta?edit='.$id_peserta.'&success='.urlencode('Data berhasil diupdate!'));

}else{
	header('Location: http://localhost/project_blk/v.1.0.3/admin/peserta?edit='.$id_peserta.'&err='.urlencode('Data gagal diupdate!'));
}

?>