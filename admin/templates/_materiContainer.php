<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <a href="http://localhost/project_blk/admin/"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
  <hr>
        <table id="table-materi" class="table table-condensed table-hover table-striped">
			<thead>
				<tr>
					<th>Judul Materi</th>
					<th>Oleh</th>
					<th>Extension</th>
					<th>Kejuruan</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($materi as $data) { ?>
				<tr>
					<td><?= $data['judulMateri'] ?></td>
					<td><?= $data['stafNama'] ?></td>
					<td><?= $data['extension'] ?></td>
					<td><?= $data['kejuruan'] ?></td>
					<td>
					<?php if ($data['extension'] == 'doc' || $data['extension'] == 'docx' || $data['extension'] == 'ppt' || $data['extension'] == 'pptx') { ?>
					<a href="http://localhost/project_blk/download.php?file=<?= base64_encode($data['idMateri']) ?>" class="btn btn-primary btn-xs" role="button"><i class="glyphicon glyphicon-download-alt"></i></a> <a href="<?= $data['fileMateri'] ?>" target="_blank" class="btn btn-default disabled btn-xs" role="button"><i class="glyphicon glyphicon-eye-open"></i></a>
					<?php }else{ ?>
					<a href="http://localhost/project_blk/download.php?file=<?= base64_encode($data['idMateri']) ?>" class="btn btn-primary btn-xs" role="button"><i class="glyphicon glyphicon-download-alt"></i></a> <a href="<?= $data['fileMateri'] ?>" target="_blank" class="btn btn-default btn-xs" role="button"><i class="glyphicon glyphicon-eye-open"></i></a>
					<?php } ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	    
	</div>
</div>