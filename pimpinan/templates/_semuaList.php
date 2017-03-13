<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<div class="container-fluid">
				<h2>Semua List</h2>
				<hr>

		    	<hr>

		    <button id="png" class="btn btn-success btn-xs"><i class="fa fa-file-image-o"></i> Export as PNG</button>
		    <button id="csv" class="btn btn-warning btn-xs"><i class="fa fa-file-o"></i> Export as CSV</button>
		    <button id="sql" class="btn btn-danger btn-xs"><i class="fa fa-file-code-o"></i> Export as SQL</button>
		    <button id="word" class="btn btn-primary btn-xs"><i class="fa fa-file-word-o"></i> Export as MS Word</button>
		    <button id="excel" class="btn btn-default btn-xs"><i class="fa fa-file-excel-o"></i> Export as MS Exel</button>
		    <button id="btn-print" class="btn btn-default btn-xs"><i class="fa fa-print"></i> Print</button>
		    
		    <hr>
			
			<table id="table-peserta-per-kejuruan" class="table table-bordered table-striped table-hover">
				<thead>
					<th>#</th>
					<th>Nama Staf</th>
					<th>Kejuruan</th>
					<th>Instruktur</th>
				</thead>
				<tbody>
					<?php $no=1; foreach ($getPesertaByStaf as $data) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= ucwords($data['PESERTA']) ?></td>
							<td><?= $data['KEJURUAN'] ?></td>
							<td><?= $data['STAF'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

			</div>

		</div>

	</div>