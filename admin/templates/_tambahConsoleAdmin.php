<h2>Tambah Features</h2>
<hr>

<?php

$sql = mysql_query("SELECT idAdmin FROM admin WHERE emailAdmin='".$_SESSION['login']."'");
$res = mysql_fetch_assoc($sql);

?>

<form action="<?= $url ?>admin/config/featureProses.php" class="form-group" method="post" enctype="multipart/form-data">
  
  <label>Judul Features</label>
  <input type="text" name="judulFeature" class="form-control" required>
  <br>

  <label>Judul Features</label>
  <textarea name="deskFeature" class="form-control" rows="4" style="resize:none;" required></textarea>
  <br>

  <label>Gambar Features</label>
  <input type="file" name="images" class="form-control">

  <input type="hidden" name="idAdmin" value="<?= $res['idAdmin'] ?>">
  <br>

  <input type="submit" name="addFeature" value="Tambah Feature" class="btn btn-info">

</form>