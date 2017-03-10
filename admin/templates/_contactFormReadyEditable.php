<form action="<?= $url ?>admin/onfig/contactProses.php" class="form-group" method="POST">
	<label>Judul Halaman Kontak :</label>
	<input type="text" name="contactHeading" class="form-control" value="<?= $data['contactHeading']; ?>" required>
	<br>
	<label>Kontak Deskripsi :</label>
	<textarea name="contactDeskripsi" rows="5" style="resize:none;" class="form-control"><?= $data['contactText']; ?></textarea> 
	<br>
	<label>Telepon :</label>
	<input type="tel" name="contactTelepon" class="form-control" required value="<?= $data['contactTelepon']; ?>">
	<label>Alamat :</label>
	<input type="text" name="contactAlamat" class="form-control" required value="<?= $data['contactAlamat']; ?>">
	<br>
	<input type="hidden" name="id" value="<?= $data['id'] ?>">
	<input type="submit" name="editContact" value="Edit Contact" class="btn btn-info" required>
</form>