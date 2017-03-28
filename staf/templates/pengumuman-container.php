 <div class="starter-template">

	<h2 class="text-center">Pengumanan Balai Latihan Kerja Kabupaten Magelang</h2>
	<hr>
	<table class="table table-bordered table-condensed table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>KODE PENDAFTARAN</th>
				<th>NAMA LENGKAP</th>
				<th>KEJURUAN</th>
				<th>STATUS</th>
				<th>TAHUN</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1; foreach (getPesertaByKejuruan() as $data){ ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= __generatorID($data['ID_KEJURUAN']).'-'.$data['ID_PESERTA'] ?></td>
				<td><?= ucwords($data['NAMA']) ?></td>
				<td><?= $data['KEJURUAN'] ?></td>
				<td align="center"><?= $retVal = ($data['STATUS'] == 0) ? 'Tidak Lulus' : 'Lulus'; ?></td>
				<td align="center"><?= $data['TAHUN'] ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

 </div>