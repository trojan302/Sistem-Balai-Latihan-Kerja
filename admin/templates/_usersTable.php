<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<hr>

<button id="users-pdf" class="btn btn-danger btn-xs disabled" disabled><i class="glyphicon glyphicon-print"></i> PDF</button>
<button id="users-png" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print"></i> PNG</button>
<button id="users-json" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-print"></i> JSON</button>
<button id="users-csv" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></i> CSV</button>
<button id="users-xml" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-print"></i> XML</button>
<button id="users-sql" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-print"></i> SQL</button>
<button id="users-word" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-print"></i> MS Word</button>
<button id="users-excel" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-print"></i> MS Exel</button>

<hr>

<table id="table-users" class="table table-hover table-responsive">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Alamat</th>
			<th>No. HP / Telepon</th>
			<th>Date Registers</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $user) { ?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $user['PesertaNama'] ?></td>
			<td><?= $user['Username'] ?></td>
			<td><?= $user['PesertaAlamat'] ?></td>
			<td><?= $user['PesertaTelepon'] ?></td>
			<td><?= $user['DateCreated'] ?></td>
			<td>
				<a href="?url=delete&id=<?= $user['UserID'] ?>" class="btn btn-danger btn-xs">Delete</a>
			</td>
		</tr>

		<?php } ?>
	</tbody>
</table>

</div>
</div>