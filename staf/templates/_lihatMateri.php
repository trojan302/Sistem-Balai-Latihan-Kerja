<?php $materi = getMateriByID($_GET['materi']); ?>
<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<div class="container-fluid">
			<h2>
				<i class="glyphicon glyphicon-file small"></i>
				<sup class="small"><?= $materi[0]['extension'] ?></sup> 
				<?= $_GET['lihat_materi'] ?>
			</h2>
			<a href="?edit_materi=<?= $_GET['materi'] ?>&staf=<?= urlencode(stafNama($materi[0]['stafID'])); ?>" class="btn btn-xs btn-success pull-right">Edit</a>
			<div class="clearfix"></div>
			</div>
			<hr>

			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="<?= $materi[0]['fileMateri'] ?>"></iframe>
			</div>
			<br>
			<div class="well">
			<span>Deskripsi :</span> <br>
			<p style="text-indent:40px;"><?= $materi[0]['deskripsi'] ?></p>
			<small>
			Diunggah : <?= $materi[0]['uploaded'] ?> <br>
			Oleh : <?= stafNama($materi[0]['stafID']); ?> <br>
			Filename : <?= str_replace($url.'libs/materi/','', $materi[0]['fileMateri']); ?>
			</small>
			</div>

		</div>

	</div>

</div>