<?php 
require './config/function.php';

$peserta = getPeserta($_GET['id']);
$data = getGelombang($peserta['id_kejuruan']);

$tanggal = $data['gelombangDibuka'];
$day = date('D', strtotime($data['gelombangDibuka']));
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);

$gelobangDibuka = strtotime($data['gelombangDibuka']);
$gelobangDitutup = strtotime('+2 weeks', $gelobangDibuka);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pendaftaran</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<style>
		body{
			font-size: 11px;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<h5 class="text-center">
			PEMERINTAH KABUPATEN MAGELANG <br> DINAS TENAGA KERJA SOSIAL DAN TRANSMIGRASI
		</h5>
		<h4 class="text-center">BALAI LATIHAN KERJA</h4>
		<address style="font-size:11px;" class="text-center">
			<i>Jalan Magelang - Purworejo KM. 11, Tempuran, Sidoagung, Tempuran Magelang, Jawa Tengah Kode Pos (56172) Telepon (0293) 335092</i>
		</address>
		<hr>

		<div class="text-center">
			<b>TANDA PESERTA UJIAN</b><br>
			<b>( <?= $data['nama'] ?> )</b>
		</div>

		<div class="text-justify" style="font-size:11px;">
			<span class="pull-right"><i>Magelang, <?= str_replace('-','/',$peserta['tanggalDaftar']) ?></i></span>
		    <table class="table-condensed" style="width:75%;">
		    	<tr>
		    		<th style="width:35%;">No Test</th>
		    		<td style="width:65%;">: <?= __generatorID($peserta['id_kejuruan']).'-'.$peserta['id_peserta'] ?></td>
		    	</tr>
		    	<tr>
					<th style="width:35%;">Kejuruan</th>
					<td style="width:65%;">: <?= namaKejuruan($peserta['id_kejuruan']); ?></td>
				</tr>
				<tr>
					<th style="width:35%;">Nama Peserta</th>
					<td style="width:65%;">: <?= $peserta['nama'] ?></td>
				</tr>
				<tr>
		    		<th style="width:35%;">Alamat</th>
					<td style="width:65%;">: <?= $peserta['alamat'] ?></td>
		    	</tr>
		    	<tr>
		    		<th style="width:35%;">Wktu Ujian</th>
					<td style="width:65%;">: <?= $dayList[$day]; ?></td>
		    	</tr>
		    </table>
		    <br>
		    <p style="text-indent:50px;">Berikut ini adalah bukti bahwa yang bertanda tangan dibawah ini telah mendaftarkan diri di Balai Latihan Kerja sebagai peserta pelatihan : </p>
		    <table class="table-condensed" style="width:75%;margin:auto;">
		    	<tr>
		    		<th>Nama</th>
		    		<td>: <?= $peserta['nama'] ?></td>
		    	</tr>
		    	<tr>
		    		<th>Tempat, Tanggal Lahir</th>
		    		<td>: <?= $peserta['ttl'] ?></td>
		    	</tr>
		    	<tr>
		    		<th>Alamat</th>
		    		<td>: <?= $peserta['alamat'] ?></td>
		    	</tr>
		    	<tr>
		    		<th>Pendidikan</th>
		    		<td>: <?= pendidikan($peserta['id_pendidikan']) ?></td>
		    	</tr>
		    </table>
		    <br><br>
		    <span class="pull-right text-center">
		    <b>Tertanda</b>
		    <br><br>
		    <i><?= $peserta['nama'] ?></i>
		    </span>
		</div>
	</div>

</body>
</html>