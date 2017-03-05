<h2>Edit Feature</h2>
<hr>

<form action="" class="form-group" enctype="multipart/form-data" method="post">
  
  <label>Judul Features</label>
  <input type="text" name="judulFeature" value="<?= $data['judulFeature']; ?>" class="form-control" required><br>

  <label>Judul Features</label>
  <textarea name="deskFeature" class="form-control" rows="4" style="resize:none;" required><?= $data['deskFeature'] ?></textarea><br>

  <label>Gambar Features</label>
  <input type="file" name="images" class="form-control" value="<?= $data['images'] ?>">
  <p class="small"><b><i>*GambarSekarang : <a target="_blank" href="./libs/photos/<?= $data['images'] ?>">http://anonymous/project_blk/libs/photos/<?= $data['images'] ?></a></i></b></p><br>

  <input type="hidden" name="idFeatures" value="<?= $data['idFeatures'] ?>">
  <input type="hidden" name="idAdmin" value="<?= $data['idAdmin'] ?>">

  <input type="submit" name="editFeature" value="Edit Feature" class="btn btn-info">

</form>