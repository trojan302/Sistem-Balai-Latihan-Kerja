      <?php
      	require './config/function.php';

      	$query = "SELECT * FROM contact LIMIT 1";
		$sql = mysql_query($query);
		$result = mysql_fetch_assoc($sql);
      ?>
      <div class="starter-template">
        <h1><i class="glyphicon glyphicon-phone-alt"></i> <?= $result['contactHeading']; ?></h1><sup>Kabupaten Magelang</sup>
        <hr>
        <address class="lead text-justify">
        <b>Alamat :</b><?= $result['contactAlamat']; ?>
		<b>Telepon :</b><?= $result['contactTelepon']; ?>
		<br><br>
		<div class="container-fluid">
		<table class="table">
			<tr>
				<th>Hari</th>
				<th>Waktu</th>
			</tr>
			<tr>
				<td class="bg-danger">Minggu</td>
				<td class="bg-danger">Tutup</td>
			</tr>
			<tr>
				<td class="bg-success">Senin</td>
				<td class="bg-success">07.30–13.00</td>
			</tr>
			<tr>
				<td class="bg-success">Selasa</td>
				<td class="bg-success">07.30–13.00</td>
			</tr>
			<tr>
				<td class="bg-success">Rabu</td>
				<td class="bg-success">07.30–13.00</td>
			</tr>
			<tr>
				<td class="bg-success">Kamis</td>
				<td class="bg-success">07.30–13.00</td>
			</tr>
			<tr>
				<td class="bg-success">Jumat</td>
				<td class="bg-success">07.30–13.00</td>
			</tr>
			<tr>
				<td class="bg-success">Sabtu</td>
				<td class="bg-success">07.30–13.00</td>
			</tr>
		</table>
		</div>
        </address>
      </div>