      <?php
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
		<b>Jadwal bisa berubah-ubah tanpa pemberitahuan terlebih dahulu.</b>
		<br><br>

		<div class="container-fluid">
			<?= $result['contactText']; ?>
		</div>
        </address>
      </div>