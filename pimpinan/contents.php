<?php 
require './config/function.php';

$peserta = getPeserta($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pendafataran</title>
	<link rel="stylesheet" href="http://localhost/project_blk/v.1.0.3/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">
		<div>
		<img src="libs/photos/icon_blk.png" alt="Logo BLK" style="width:45px;height:60px;margin-left:150px;" class="pull-left">
		<h4 class="pull-left text-center" style="margin-left:20px;">Tanda Bukti Pendaftaran <br> Balai Latihan Kerja Kabupaten Magelang</h4>
		<div class="clearfix"></div>
		</div>
		<address style="font-size:11px;" class="text-center">
			<i>Jalan Magelang - Purworejo KM. 11, Tempuran, Sidoagung, Tempuran <br> Magelang, Jawa Tengah Kode Pos (56172) Telepon (0293) 335092</i>
		</address>
		<hr>

		<div class="text-justify" style="font-size:11px;">
			<span class="pull-right"><i>Magelang, <?= str_replace('-','/',$peserta['tanggalDaftar']) ?></i></span>
		    <table class="table-condensed" style="width:75%;">
		    	<tr>
		    		<th style="width:35%;">Kode Pendaftaran</th>
		    		<td style="width:65%;">: <?= __generatorID($peserta['id_kejuruan']).'-'.$peserta['id_peserta'] ?></td>
		    	</tr>
		    	<tr>
					<th style="width:35%;">Kejuruan</th>
					<td style="width:65%;">: <?= namaKejuruan($peserta['id_kejuruan']); ?></td>
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
		    <br><br><br><br>
		    <i><?= $peserta['nama'] ?></i>
		    </span>
		</div>
	</div>

</body>
</html>