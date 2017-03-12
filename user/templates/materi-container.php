	<div class="starter-template">
    	<h1><i class="glyphicon glyphicon-book"></i> Materi instruktur</h1>
        <hr>
        <div class="row">
        <?php foreach ($materi as $data) { ?>
        	
		  <div class="col-sm-4 col-xs-6 col-md-3">
		    <div class="thumbnail">
		      <img src="<?= $data['imageMateri'] ?>" alt="<?= $data['judulMateri'] ?>">
		      <div class="caption">
		        <h4><?= $data['judulMateri'] ?></h4>
		        <small>Diunggah : <?= $data['upload']?> <br> Oleh : <?= $data['stafNama'] ?> <br> File Format :  <span class="label label-danger"><?= $data['extension'] ?></span> <span class="label label-info"><?= $data['kejuruan'] ?></span></small>
		        <hr>
		        <p><?= $data['deskripsi'] ?></p>
		        <?php if ($data['extension'] == 'doc' || $data['extension'] == 'docx' || $data['extension'] == 'ppt' || $data['extension'] == 'pptx') { ?>
		        	<p><a href="download.php?file=<?= base64_encode($data['idMateri']) ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-download-alt"></i> Download</a> <a href="<?= $data['fileMateri'] ?>" target="_blank" class="btn btn-default disabled" role="button"><i class="glyphicon glyphicon-eye-open"></i> Lihat</a></p>
		        <?php }else{ ?>
					<p><a href="download.php?file=<?= base64_encode($data['idMateri']) ?>" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-download-alt"></i> Download</a> <a href="<?= $data['fileMateri'] ?>" target="_blank" class="btn btn-default" role="button"><i class="glyphicon glyphicon-eye-open"></i> Lihat</a></p>
		        <?php } ?>
		        
		      </div>
		    </div>

		    <div class="clearfix"></div>
		  </div>

	    <?php } ?>
		  
		</div>
	</div>