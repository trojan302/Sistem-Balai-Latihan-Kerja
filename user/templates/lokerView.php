<?php if (!isset($_GET['detailLoker'])) {
	$lokerInfo = getCurrentLoker(1);
?>

<div class="panel panel-default">
  <div class="panel-heading">
  <?= $lokerInfo['judulLoker'] ?>
  </div>
  <div class="panel-body">
     <?= $lokerInfo['deskripsi'] ?>
  </div>
  <div class="panel-footer">
  <?= $lokerInfo['judulLoker'] ?>
  </div>
</div>

<?php } else {
	$lokerInfo = getCurrentLoker($_GET['detailLoker']);
?>

<div class="panel panel-default">
  <div class="panel-heading">
  <?= $lokerInfo['judulLoker'] ?>
  </div>
  <div class="panel-body">
     <?= $lokerInfo['deskripsi'] ?>
  </div>
  <div class="panel-footer">
  <?= $lokerInfo['judulLoker'] ?>
  </div>
</div>

<?php } ?>