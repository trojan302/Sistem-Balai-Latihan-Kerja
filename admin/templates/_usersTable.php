<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<div class="well" style="background-color:skyblue;color:white;">
	<h2><i class="glyphicon glyphicon-user"></i> Total Users (<?= usersTotal(); ?>)</h2>
</div>

<table class="table table-hover table-responsive">
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