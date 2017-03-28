<h2>Edit Features</h2>
<hr>

<form action="" class="form-group" method="post">
  
  <label>Judul Features</label>
  <input type="text" name="judulFeature" value="<?= $data['judulFeature']; ?>" class="form-control" required><br>

  <label>Judul Features</label>
  <textarea name="deskFeature" class="form-control" rows="4" style="resize:none;" required><?= $data['deskFeature'] ?></textarea><br>

  <input type="hidden" name="idFeatures" value="<?= $data['idFeatures'] ?>">
  <input type="hidden" name="idAdmin" value="<?= $data['idAdmin'] ?>">

  <input type="submit" name="editFeature" value="Edit Feature" class="btn btn-info">

</form>