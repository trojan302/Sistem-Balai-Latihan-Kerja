<ul class="list-group">
<?php foreach ($listmateri as $data) { ?>

	<li class="list-group-item">
		<a href="?lihat_materi=<?= urlencode($data['judulMateri']) ?>&materi=<?= $data['materiID'] ?>">
			<?= $data['judulMateri'] ?>
		</a>
		<span class="label label-primary pull-right">Diunggah : <?= $data['uploaded'] ?></span>			    
	</li>

<?php } ?>
</ul>