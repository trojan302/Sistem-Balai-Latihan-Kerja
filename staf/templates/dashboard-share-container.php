<div class="starter-template">
	
	<h1><i class="glyphicon glyphicon-book"></i> Halaman Materi</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">

			<h2>Bagi Materi</h2>
			<hr>

			<form method="POST" action="<?= $url ?>staf/config/prosesUploadMateri.php" enctype="multipart/form-data">
			  <div class="form-group">
			    <label>Judul Materi</label>
			    <input type="text" class="form-control" name="judulMateri" placeholder="Judul Materi">
			  </div>
			  <div class="form-group">
			    <label>Deksripsi Materi</label>
			   <textarea name="deksripsi" class="form-control" rows="4" placeholder="Deksripsi Materi" style="resize:none;"></textarea>
			  </div>
			  <div class="form-group">
			    <label>File Materi</label>
			    <input type="file" name="fileMateri" required>
			    <p class="help-block">Ekstenti yang diperbolehkan hanya (.docx, .doc, .pdf, .xls, .xlsx).</p>
			  </div>
			  <input type="hidden" name="kejuruan" value="<?= namaKejuruan($staf['id_kejuruan']); ?>">
			  <input type="hidden" name="kejuruanID" value="<?= $staf['id_kejuruan']; ?>">
			  <input type="hidden" name="stafID" value="<?= $_SESSION['stafID'] ?>">
			  <input type="submit" name="share" value="Share Materi" class="btn btn-default">
			</form>
 	
		</div>

	</div>

</div>