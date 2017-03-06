<?php if (!isset($_GET['vm'])) { 
$currentVisi = getCurrentVisiMisi(1);
?>

<div class="panel panel-primary">
  <div class="panel-heading">Visi Misi <?= $currentVisi['idVisiMisi'] ?></div>
  <div class="panel-body">
    <?= $currentVisi['text'] ?>
  </div>
  <div class="panel-footer"><a class="btn btn-success btn-xs" href="?editVm=<?= $currentVisi['idVisiMisi'] ?>#VisiMisi">Edit</a></div>
</div>

<?php }else{
$currentVisi = getCurrentVisiMisi($_GET['vm']); ?>

<div class="panel panel-primary">
  <div class="panel-heading">Visi Misi <?= $currentVisi['idVisiMisi'] ?></div>
  <div class="panel-body">
    <?= $currentVisi['text'] ?>
  </div>
  <div class="panel-footer"><a class="btn btn-success btn-xs" href="?editVm=<?= $currentVisi['idVisiMisi'] ?>#VisiMisi">Edit</a></div>
</div>

<?php } ?>