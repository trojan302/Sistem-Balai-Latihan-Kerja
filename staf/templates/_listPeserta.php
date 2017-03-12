<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<div class="container-fluid">
			<h2>List Materi</h2>
			<hr>

		    <button id="png" class="btn btn-success btn-xs"><i class="fa fa-file-image-o"></i> Export as PNG</button>
		    <button id="csv" class="btn btn-warning btn-xs"><i class="fa fa-file-o"></i> Export as CSV</button>
		    <button id="sql" class="btn btn-danger btn-xs"><i class="fa fa-file-code-o"></i> Export as SQL</button>
		    <button id="word" class="btn btn-primary btn-xs"><i class="fa fa-file-word-o"></i> Export as MS Word</button>
		    <button id="excel" class="btn btn-default btn-xs"><i class="fa fa-file-excel-o"></i> Export as MS Exel</button>
		    <button id="btn-print" class="btn btn-default btn-xs"><i class="fa fa-print"></i> Print</button>
		    
		    <hr>
			
			<?php 

			$sql = "SELECT kejuruan.nama_kejuruan AS KEJURUAN, peserta.nama AS NAMA_PESERTA FROM peserta INNER JOIN kejuruan ON peserta.id_kejuruan = kejuruan.id_kejuruan WHERE kejuruan.id_kejuruan='".$_GET['staf_kejuruan']."'";
			$query = mysql_query($sql);
			$row = mysql_num_rows($query);
			$no=1;

			if ($row > 0) { 
			?>
			
			<table id="table-peserta-per-kejuruan" class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					<th>Nama Peserta</th>
					<th>Kejuruan</th>
					<th>Instruktur</th>
				</thead>
				<tbody>
					<?php while ($result = mysql_fetch_assoc($query)) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $result['NAMA_PESERTA'] ?></td>
							<td><?= $result['KEJURUAN'] ?></td>
							<td><?= $_GET['list_peserta'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

			<?php 
			}else{ ?>
			
			<div class="well well-lg">
				<h3>Data Tidak Ada</h3>
			</div>

			<?php
			}

			?>

		</div>

	</div>

</div>