<?php 

if (!isset($_GET['edit'])) {
  header('Location: <?= $url ?>admin/kejuruan');
}

$datas = getCurrentGelombang($_GET['edit']);

?>
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<a href="<?= $url ?>admin/kejuruan"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
<hr>

	<h3>Edit Gelombang Kejuruan</h3>
  <hr>

  <?php if (isset($_GET['success'])) { ?>
            
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/kejuruan'">&times;</span></button>
        <?= $_GET['success'] ?>
      </div>

    <?php } ?>

    <?php if (isset($_GET['err'])) { ?>
            
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/kejuruan'">&times;</span></button>
        <?= $_GET['err'] ?>
      </div>

    <?php } ?>

  <form action="<?= $url ?>admin/config/editGelombangProses.php" method="POST">
    
  <div class="form-group">
    <label>Nama Kejuruan</label>
    <input type="text" value="<?= $datas['KejuruanNama'] ?>" class="form-control" readonly>
  </div>

  <div class="form-group">
    <label>Nama Gelombang</label>
    <input type="text" value="<?= $datas['GelombangNama'] ?>" class="form-control" name="GelombangNama">
  </div>

  <div class="form-group">
    <label>Kuota Gelombang</label>
    <?php if ($datas['GelombangKuota'] === 0) { ?>
      <input type="number" min="0" max="20" value="0" class="form-control" name="GelombangKuota">
    <?php }else{ ?>
      <input type="number" min="0" max="20" value="<?= $datas['GelombangKuota'] ?>" class="form-control" name="GelombangKuota">
    <?php } ?>
  </div>

  <div class="form-group">
    <label>Syarat Gelombang</label>
    <?php if(strlen($datas['GelombangSyarat']) === 0) { ?>
    <textarea class="form-control" name="GelombangSyarat" rows="4" placeholder="Masukkan Syarat Pendaftaran"></textarea>
    <?php } else { ?>
    <textarea class="form-control" name="GelombangSyarat" rows="4"><?= $datas['GelombangSyarat'] ?></textarea>
    <?php } ?>
  </div>

  <div class="form-group">
    <label>Status Gelombang</label><br>
    <?php if ($datas['Status'] === 'Buka') { ?>
      <input type="radio" value="Tutup" class="checkbox-inline" name="Status" required> Tutup &nbsp;
      <input type="radio" value="Buka" checked class="checkbox-inline" name="Status" required> Buka      
    <?php } else { ?>
      <input type="radio" value="Tutup" checked class="checkbox-inline" name="Status" required> Tutup &nbsp;
      <input type="radio" value="Buka" class="checkbox-inline" name="Status" required> Buka
    <?php } ?>
  </div>
  <input type="hidden" name="GelombangID" value="<?= $datas['GelombangID'] ?>">
  <input type="submit" neme="editGelombang" value="Edit Gelombang" class="btn btn-info">

  </form>

</div>
</div>