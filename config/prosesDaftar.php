<?php 
session_start();
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBMS', 'project_blk');


mysql_connect(HOST,USER,PASS)or die('Server not connected!');
mysql_select_db(DBMS)or die('Database not selected!');

if (isset($_POST['daftar'])) {
	
	$nama 				= $_POST['nama'];
	$nik 				= $_POST['nik'];
	$kejuruan			= $_POST['kejuruan'];
	$ttl 				= $_POST['ttl'];
	$jenis_kelamin 		= $_POST['jenis_kelamin'];
	$skawin		 		= $_POST['skawin'];
	$pendidikan	 		= $_POST['pendidikan'];
	$alamat		 		= $_POST['alamat'];
	$telepon	 		= $_POST['telepon'];
	$agama		 		= $_POST['agama'];
	$pkursus	 		= $_POST['pkursus'];
	$pkerja		 		= $_POST['pkerja'];
	$namaOrtu	 		= $_POST['namaOrtu'];
	$pkOrtu		 		= $_POST['pkOrtu'];
	$alamatOrtu	 		= $_POST['alamatOrtu'];
	$statusPeserta		= 0;
	$tanggalDaftar      = date('Y-m-d');

	$tahunDaftar 		= date('Y');

	$maxSize 			= 10000000;

	$uriIjazah 			= "http://localhost/project_blk/libs/ijazah/";
	$uriKtp 			= "http://localhost/project_blk/libs/ktp/";

	$filenameijazah		= $uriIjazah."ijazah-user-".date('d-m-Y')."-0".$kejuruan."-".strtolower(str_replace(' ','-',$nama));
	$filenamektp		= $uriKtp."ktp-user-".date('d-m-Y')."-0".$kejuruan."-".strtolower(str_replace(' ','-',$nama));

	$pathIjazah			= "../libs/ijazah/";
	$pathKtp			= "../libs/ktp/";

	$fileijazah			= $_FILES['ijazah']['name'];
	$typeijazah			= $_FILES['ijazah']['type'];
	$tmpijazah 			= $_FILES['ijazah']['tmp_name'];
	$sizeijazah 		= $_FILES['ijazah']['size'];
	$errorijazah 		= $_FILES['ijazah']['error'];
	$extijazah 			= pathinfo($_FILES['ijazah']['name']);
	$extensionIjazah    = $extijazah['extension'];
	$realnameijazah 	= explode(".$extensionIjazah", $fileijazah);
	$ijazahUpload 		= str_replace($realnameijazah[0], $filenameijazah , $fileijazah);
	$toDirIjazah 		= str_replace($uriIjazah, $pathIjazah, $ijazahUpload);

	$filektp			= $_FILES['ktp']['name'];
	$typektp			= $_FILES['ktp']['type'];
	$tmpktp 			= $_FILES['ktp']['tmp_name'];
	$sizektp 			= $_FILES['ktp']['size'];
	$errorktp 			= $_FILES['ktp']['error'];
	$extktp 			= pathinfo($_FILES['ktp']['name']);
	$extensionktp   	= $extktp['extension'];
	$realnamektp		= explode(".$extensionktp", $filektp);
	$ktpUpload 			= str_replace($realnamektp[0], $filenamektp , $filektp);
	$toDirKtp 			= str_replace($uriKtp, $pathKtp, $ktpUpload);


	$sqlCheck = "SELECT nama, nik, DATE_FORMAT(tanggalDaftar, '%Y') AS Mendaftar FROM peserta WHERE nama='$nama' OR (nama LIKE '%$nama%');";
	$queryRes = mysql_query($sqlCheck);
	$rows = mysql_num_rows($queryRes);
	$result = mysql_fetch_assoc($queryRes);

	if ($nama == $result['nama'] || $nik == $result['nik'] || $tahunDaftar == $result['Mendaftar']) {

		$error = "Pendaftaran Gagal! Peserta dengan nama : ".$result['nama'].", $nama, etc sudah mendaftar pada : $tanggalDaftar.";
		header('Location: ../pendaftaran.php?err='. urlencode($error));

	}else{
		
		$valid_ext = array(
			"image/png",
			"image/gif",
			"image/jpeg"
		);

		if ($errorijazah == 0) {
			
			echo "Tidak ada error<br>";

			if (in_array($typeijazah, $valid_ext)) {

				echo "Tipe Oke<br>";

				if ($sizeijazah < $maxSize) {

					echo "Size aman<br>";

					if (!file_exists($pathIjazah.$fileijazah)) {

						echo "File tidak ada<br>";

						if (move_uploaded_file($tmpijazah, $toDirIjazah)) {

							echo "Ijazah move to dir<br>";
							
							if (move_uploaded_file($tmpktp, $toDirKtp)) {
								
								echo "ktp move to dir<br>";

								$query = "INSERT INTO `peserta`(`id_peserta`, `nama`, `id_kejuruan`, `nik`, `ttl`, `jk`, `id_agama`, `skawin`, `id_pendidikan`, `alamat`, `telp`, `p_kursus`, `p_kerja`, `nama_ortu`, `pk_ortu`, `alamat_ortu`,`ijazah`, `ktp`, `tanggalDaftar`, `status_peserta`) VALUES ('','$nama','$kejuruan','$nik','$ttl','$jenis_kelamin','$agama','$skawin','$pendidikan','$alamat','$telepon','$pkursus','$pkerja','$namaOrtu','$pkOrtu','$alamatOrtu','$ijazahUpload','$ktpUpload','$tanggalDaftar','$statusPeserta')";

								$sql = mysql_query($query);

								if ($sql) {
								$_SESSION['daftar'] = mysql_insert_id();
								header('Location: ../notif?success='. urlencode('Registration Successfully...'));
								} else {
								header('Location: ../pendaftaran?err='. urlencode('Registration falilure!!!'));
								}

							}else{
								echo "ktp not move to dir<br>";
							}

						}else{
							echo "ijazah not move to dir<br>";
						}

					}else{
						echo "File sudah ada";
					}

				}else{
					echo "Size kegedean";
				}

			}else{
				echo "Tipe Tidak valid";
			}

		}else{
			echo "Error File";
		}
	}

}


?>