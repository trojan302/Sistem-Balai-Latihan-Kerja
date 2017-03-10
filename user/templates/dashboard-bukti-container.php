<div class="starter-template">
	
	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<div class="col-lg-4 col-md-3 col-sm-4 hidden-sm">
			<ul class="list-group">
			  <li class="list-group-item">
			    <a href="?profile=<?= urlencode($peserta['nama']) ?>">Profile</a>			    
			  </li>
			  <li class="list-group-item">
			    <a href="?bukti_daftar=<?= urlencode($peserta['nama']) ?>&peserta_id=<?= $peserta['id_peserta'] ?>">Bukti Pendaftaran</a>
			  </li>
			</ul>
		</div>

		<div class="col-lg-8 col-md-9 col-sm-8">

			<div class="panel panel-default">
			  <div class="panel-heading">
				  <span class="pull-left">Bukti Pendaftaran</span>
				  <span class="pull-right"><a href="http://localhost/project_blk/user/print?print=bukti_daftar&id=<?= $peserta['id_peserta'] ?>" class="btn btn-xs btn-primary" target="_blank"><i class="glyphicon glyphicon-print"></i> Print Bukti</a></span>
				  <div class="clearfix"></div>
			  </div>
			  <div class="panel-body">
			  	<span class="pull-right"><i>Magelang, <?= str_replace('-','/',$peserta['tanggalDaftar']) ?></i></span>
			    <table class="table-condensed">
			    	<tr>
			    		<th>Kode Pendaftaran</th>
			    		<td>: <?= __generatorID($peserta['id_kejuruan']).'-'.$peserta['id_peserta'] ?></td>
			    	</tr>
			    	<tr>
						<th>Kejuruan</th>
						<td>: <?= namaKejuruan($peserta['id_kejuruan']); ?></td>
					</tr>
			    </table>
			    <hr>
			    <p style="text-indent:50px;">Berikut ini adalah bukti bahwa yang bertanda tangan dibawah ini telah mendaftarkan diri di Balai Latihan Kerja sebagai peserta pelatihan : </p>
			    <table class="table-condensed" style="width:70%;margin:auto;">
			    	<tr>
			    		<th>Nama</th>
			    		<td>: <?= $peserta['nama'] ?></td>
			    	</tr>
			    	<tr>
			    		<th>Tempat, Tanggal Lahir</th>
			    		<td>: <?= $peserta['ttl'] ?></td>
			    	</tr>
			    	<tr>
			    		<th>Alamat</th>
			    		<td>: <?= $peserta['alamat'] ?></td>
			    	</tr>
			    	<tr>
			    		<th>Pendidikan</th>
			    		<td>: <?= pendidikan($peserta['id_pendidikan']) ?></td>
			    	</tr>
			    </table>
			    <br><br>
			    <span class="pull-right text-center">
			    <b>Tertanda</b>
			    <br><br><br><br>
			    <i><?= $peserta['nama'] ?></i>
			    </span>
			  </div>
			</div>
		</div>

	</div>

</div>