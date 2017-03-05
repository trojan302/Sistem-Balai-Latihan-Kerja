<h3>Daftar Loker :</h3>
<ul class="list-group">
<?php if (getRowOfLoker() === 0) { ?>

	<small>Maaf, tidak ada loker.</small>

<?php
} else { 
	foreach ($lokers as $info) {
?>
	<li class="list-group-item">
		<span class="label label-primary pull-right"><?= $info['closingDate'] ?></span>
		<a href="?detailLoker=<?= $info['idLoker'] ?>"><small><?= $info['judulLoker'] ?></small></a>&nbsp;
	</li>
<?php } } ?>
</ul>