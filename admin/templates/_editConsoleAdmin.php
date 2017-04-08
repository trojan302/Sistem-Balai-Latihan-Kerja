<h2>Edit Features</h2>
<hr>

<form action="<?= $url ?>admin/config/featureProses.php" class="form-group" method="post" enctype="multipart/form-data">
  
  <label>Judul Features</label>
  <input type="text" name="judulFeature" value="<?= $data['judulFeature']; ?>" class="form-control" required><br>

  <label>Deskripsi Features</label>
  <textarea name="deskFeature" class="form-control" rows="4" style="resize:none;" required><?= $data['deskFeature'] ?></textarea><br>

  <label>Gambar Features</label>
  <input type="file" name="images" class="form-control">
  <br>

  <input type="hidden" name="idFeatures" value="<?= $data['idFeatures'] ?>">
  <input type="hidden" name="file_image" value="<?= $data['pathUrl'] ?>">
  <input type="hidden" name="idAdmin" value="<?= $data['idAdmin'] ?>">
  <input type="hidden" name="idFeatures" value="<?= $data['idFeatures'] ?>">

  <input type="submit" name="editFeature" value="Edit Feature" class="btn btn-info">

</form>