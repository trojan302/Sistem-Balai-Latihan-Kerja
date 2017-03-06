<?php if (isset($_GET['editVm'])) { 
	$data = getCurrentVisiMisi($_GET['editVm']); ?>
	
	<form action="./config/visiMisiProses.php" class="form-group" method="POST">
		<label>Text Visi Misi</label><br>
		<textarea name="text" class="form-control" rows="5" style="resize:none;" required><?= $data['text'] ?></textarea>
		<input type="hidden" name="idAdmin" value="<?= $data['idAdmin'] ?>">
		<br>
		<input type="submit" name="editVm" class="btn btn-info btn-sm" value="Save">
	</form>

<?php } ?>