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