<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<div class="col-lg-4 col-md-3 col-sm-4 hidden-sm">
			<ul class="list-group">
			  <li class="list-group-item">
			    <a href="?profile=<?= urlencode($peserta['nama']) ?>">Profile</a>			    
			  </li>
			  <li class="list-group-item">
			    <a href="?bukti_daftar=<?= urlencode($peserta['nama']) ?>&peserta_id=<?= $peserta['id_peserta'] ?>">Bukti Pendaftaran</a>
			  </li>
			</ul>
		</div>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<h2><?= $peserta['nama'] ?></h2>
			<hr>
			<table class="table-condensed">
				<tr>
					<th>Nama</th>
					<td>: <?= $peserta['nama'] ?></td>
				</tr>
				<tr>
					<th>Kejuruan</th>
					<td>: <?= namaKejuruan($peserta['id_kejuruan']); ?></td>
				</tr>
				<tr>
					<th>NIK</th>
					<td>: <?= $peserta['nik']; ?></td>
				</tr>
				<tr>
					<th>Tempat, Tanggal Lahir</th>
					<td>: <?= $peserta['ttl']; ?></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>: <?= ucfirst($peserta['jk']); ?></td>
				</tr>
				<tr>
					<th>Agama</th>
					<td>: <?= namaAgama($peserta['id_agama']); ?></td>
				</tr>
				<tr>
					<th>Status Pernikahan</th>
					<td>: <?= $peserta['skawin']; ?></td>
				</tr>
				<tr>
					<th>Pendidikan</th>
					<td>: <?= pendidikan($peserta['id_pendidikan']); ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>: <?= $peserta['alamat']; ?></td>
				</tr>
				<tr>
					<th>Pengalaman Kursus</th>
					<td>: <?php if(strlen($peserta['p_kursus']) == 0) { echo "Tidak Ada"; }else{ echo $peserta['p_kursus']; } ?></td>
				</tr>
				<tr>
					<th>Pengalaman Kerja</th>
					<td>: <?php if(strlen($peserta['p_kerja']) == 0) { echo "Tidak Ada"; }else{ echo $peserta['p_kerja']; } ?></td>
				</tr>
				<tr>
					<th>Nama Orangtua</th>
					<td>: <?= $peserta['nama_ortu'] ?></td>
				</tr>
				<tr>
					<th>Pekerjaan Orangtua</th>
					<td>: <?= $peserta['pk_ortu'] ?></td>
				</tr>
				<tr>
					<th>Alamat Orangtua</th>
					<td>: <?= $peserta['alamat_ortu'] ?></td>
				</tr>
				<tr>
					<th>Tanggal Daftar</th>
					<td>: <?= $peserta['tanggalDaftar'] ?></td>
				</tr>
			</table>
		</div>

	</div>

</div>