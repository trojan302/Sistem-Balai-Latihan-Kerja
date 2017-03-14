<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<?php require '_sideBar.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<h2>Selamat datang, <?= $peserta['nama'] ?></h2>
			<hr>

			<h5>Sekilas Loker: </h5>
			<ul class="list-group">
			<?php if (getRowOfLoker() === 0) { ?>

				<small>Maaf, tidak ada loker.</small>

			<?php
			} else { 
				foreach ($lokers as $info) {
			?>
				<li class="list-group-item">
					<span class="label label-primary pull-right"><?= $info['closingDate'] ?></span>
					<a href="loker?detailLoker=<?= $info['idLoker'] ?>"><small><?= $info['judulLoker'] ?></small></a>&nbsp;
				</li>
			<?php } } ?>
			</ul>
		</div>

	</div>

</div>