<?php 
require 'user/config/function.php';

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
$mon = date('m', strtotime($data['gelombangDibuka']));
$monList = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);

$gelobangDibuka = strtotime($data['gelombangDibuka']);
$gelobangDitutup = strtotime('+2 weeks', $gelobangDibuka);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pendaftaran</title>
	<link rel="stylesheet" href="http://localhost/project_blk/v.1.0.3/node_modules/bootstrap/dist/css/bootstrap.min.css">
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
			<i>Jalan Magelang - Purworejo KM. 11, Tempuran, Sidoagung, Tempuran Magelang, Jawa Tengah <br> Kode Pos (56172) Telepon (0293) 335092</i>
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
		    		<th style="width:35%;">Waktu Ujian</th>
					<td style="width:65%;">: <?= $dayList[$day] . ', '. date('d') .' - '. $monList[$mon] . ' - '. date('Y') ?></td>
		    	</tr>
		    	<tr>
		    		<th style="width:35%;">&nbsp;</th>
					<td style="width:65%;">: 08 : 00 - Selesai</td>
		    	</tr>
		    </table>
		    <br>
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