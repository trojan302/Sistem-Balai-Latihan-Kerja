<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Halaman Profil</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<h2><?= $staf['nama'] ?></h2>
			<hr>
			<img src="<?= str_replace('../../','http://localhost/project_blk/v.1.0.3/', $staf['photo']) ?>" alt="" class="pull-right" style="width:40%;">
			<table class="table-condensed">
				<tr>
					<th>Nama</th>
					<td>: <?= $staf['nama'] ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>: <?= $staf['alamat'] ?></td>
				</tr>
				<tr>
					<th>Telepon</th>
					<td>: <?= $staf['telepon'] ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td>: <?= $staf['email'] ?></td>
				</tr>
				<tr>
					<th>Jabatan</th>
					<td>: <?= ucfirst($staf['jabatan']) ." - ". namaKejuruan($staf['id_kejuruan']) ?></td>
				</tr>
			</table>
		</div>

	</div>

</div>