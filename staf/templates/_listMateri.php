<ul class="list-group">
<?php foreach ($listmateri as $data) { ?>
	
	<li class="list-group-item">
		<a href="?lihat_materi=<?= urlencode($data['judulMateri']) ?>&materi=<?= $data['materiID'] ?>">
			<?= $data['judulMateri'] ?>
		</a>
		<a href="?MateriDelete=<?= $data['materiID'] ?>" class="btn btn-xs btn-danger pull-right"><i class="glyphicon glyphicon-trash"></i></a>		    
		<span class="label label-primary pull-right" style="line-height:18px;margin-right:5px;">Diunggah : <?= $data['uploaded'] ?></span>			    
	</li>

<?php } ?>
</ul>