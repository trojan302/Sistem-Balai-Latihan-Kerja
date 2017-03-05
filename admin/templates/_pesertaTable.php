<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<div class="well" style="background-color:skyblue;color:white;">
	<h2><i class="glyphicon glyphicon-list-alt"></i> Total Peserta (<?= pesertaTotal(); ?>)</h2>
</div>

<table class="table table-hover table-responsive">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Alamat</th>
			<th>No. HP / Telepon</th>
			<th>Status Peserta</th>
			<th>Date Registers</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $peserta) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $peserta['nama'] ?></td>
			<td><?= $peserta['nik'] ?></td>
			<td><?= $peserta['alamat'] ?></td>
			<td><?= $peserta['telp'] ?></td>
			<td><?php 
			if($peserta['status_peserta'] != 0){ ?>
				<span class="label label-info">Diterima</span>
			<?php } else { ?>
				<span class="label label-danger">Belum Diterima</span>
			<?php } ?></td>
			<td><?= $peserta['tanggalDaftar'] ?></td>
			<td>
				<a href="?edit=<?= $peserta['id_peserta'] ?>" class="btn btn-success btn-xs">Edit</a>
				<a href="?lihat=<?= $peserta['id_peserta'] ?>" class="btn btn-primary btn-xs">Lihat</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>

</div>
</div>