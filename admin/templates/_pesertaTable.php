<?php if (isset($_GET['delete'])) { deletePeserta($_GET['delete']); } ?>
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<hr>

<button id="peserta-pdf" class="btn btn-danger btn-xs disabled"><i class="glyphicon glyphicon-print"></i> PDF</button>
<button id="peserta-png" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print"></i> PNG</button>
<button id="peserta-json" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-print"></i> JSON</button>
<button id="peserta-csv" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></i> CSV</button>
<button id="peserta-xml" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-print"></i> XML</button>
<button id="peserta-sql" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-print"></i> SQL</button>
<button id="peserta-word" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-print"></i> MS Word</button>
<button id="peserta-excel" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-print"></i> MS Exel</button>

<hr>

<table id="table-peserta" class="table table-hover table-responsive">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Status Peserta</th>
			<th>Date Registers</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $peserta) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= ucwords($peserta['nama']) ?></td>
			<td><?= ucwords($peserta['alamat']) ?></td>
			<td><?php 
			if($peserta['status_peserta'] != 0){ ?>
				<span class="label label-info">Diterima</span>
			<?php } else { ?>
				<span class="label label-danger">Belum Diterima</span>
			<?php } ?></td>
			<td><?= $peserta['tanggalDaftar'] ?></td>
			<td>
				<a href="?edit=<?= $peserta['id_peserta'] ?>" title="Edit User" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
				<a href="?delete=<?= $peserta['id_peserta'] ?>" title="Delete User" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
				<a href="?lihat=<?= $peserta['id_peserta'] ?>" title="Lihat Detail" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>

</div>
</div>