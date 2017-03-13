<?php 
$materi = getMateriByID($_GET['materi']); 

function iconDisplay($extension){

	$icon='';

	if ($extension == 'doc' || $extension == 'docx') {
		$icon .= '<i class="fa fa-file-word-o"></i> &nbsp;';
	}else if ($extension == 'ppt' || $extension == 'pptx') {
		$icon .= '<i class="fa fa-file-powerpoint-o text-danger"></i> &nbsp;';
	}

	return $icon;

}

?>
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
			
			<?php if ($materi[0]['extension'] == 'doc' || $materi[0]['extension'] == 'docx' || $materi[0]['extension'] == 'xls' || $materi[0]['extension'] == 'xlsx' || $materi[0]['extension'] == 'ppt' || $materi[0]['extension'] == 'pptx') { ?>

				<p>Maaf browser tidak dapat memuat file kecuali pdf untuk preview.</p>

				

				<button class="btn btn-default btn-sm" type="button" onclick="location.href='download.php?fileMateri=<?= $materi[0]['fileMateri'] ?>'"><?= iconDisplay($materi[0]['extension']) ?> Download File</button>

				<br>

			<?php }else{ ?>

			<div class="embed-responsive embed-responsive-16by9">
			  <iframe class="embed-responsive-item" src="<?= $materi[0]['fileMateri'] ?>"></iframe>
			</div>

			<?php } ?>

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