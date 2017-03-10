<?php $materi = getMateriByID($_GET['edit_materi']); ?>
<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<div class="container-fluid">
			<h2>Edit Materi</h2>
			<hr>
			
			<form method="POST" action="<?= $url ?>staf/config/prosesEditMateri.php" enctype="multipart/form-data">
			  <div class="form-group">
			    <label>Judul Materi</label>
			    <input type="text" class="form-control" name="judulMateri" value="<?= $materi[0]['judulMateri'] ?>">
			  </div>
			  <div class="form-group">
			    <label>Deksripsi Materi</label>
			   <textarea name="deksripsi" class="form-control" rows="4" style="resize:none;"><?= $materi[0]['deskripsi'] ?></textarea>
			  </div>
			  <div class="form-group">
			    <label>File Materi</label>
			    <input type="file" name="fileMateri" value="<?= $materi[0]['fileMateri'] ?>">
			    <p class="help-block">
			    File Sebelumnya : 
			    <i><?= str_replace('http://anonymous/project_blk/libs/materi/','', $materi[0]['fileMateri']); ?></i>
			    </p>
			  </div>
			  <input type="hidden" name="filename" value="<?= $materi[0]['fileMateri'] ?>">
			  <input type="hidden" name="kejuruan" value="<?= namaKejuruan($staf['id_kejuruan']); ?>">
			  <input type="hidden" name="kejuruanID" value="<?= $staf['id_kejuruan']; ?>">
			  <input type="hidden" name="stafID" value="<?= $_SESSION['stafID'] ?>">
			  <input type="submit" name="editMateri" value="Edit Materi" class="btn btn-default">
			</form>

		</div>

	</div>

</div>