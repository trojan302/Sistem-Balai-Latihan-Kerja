      <div class="starter-template">
        <h1>Pendaftaran Balai Latihan Kerja</h1>
        <hr>
        <div class="row">
        <form action="<?= $url ?>config/prosesDaftar.php" method="POST" enctype="multipart/form-data">
        	<?php if (isset($_GET['err'])) { ?>

	        <div class="alert alert-danger alert-dismissible" role="alert">
	          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <?php echo $_GET['err']; ?>
	        </div>

	        <?php } ?>

        	<div class="col-md-6 col-sm-12 col-xs-12">
				  <div class="form-group">
				    <label>Nama Lengkap</label>
				    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
				  </div>
				  <div class="form-group">
				    <label>NIK</label>
				    <input type="text" class="form-control" placeholder="NIK" name="nik" required>
				  </div>
				  <div class="form-group">
				    <label>Tempat, Tanggal Lahir</label>
				    <input type="text" class="form-control" placeholder="Tempat, Tanggal Lahir" name="ttl" required>
				  </div>
				  <div class="form-group">
				    <label>Jenis Kelamin</label>
				    <select name="jenis_kelamin" class="form-control" required>
				    	<option value="">-- Pilih Salah Satu --</option>
				    	<option value="pria">Laki-laki</option>
				    	<option value="wanita">Perempuan</option>
				    </select>
				  </div>
				  <div class="form-group">
				  	<label>Status Perkawinan</label>
				  	<select name="skawin" class="form-control" required>
				    	<option value="">-- Pilih Salah Satu --</option>
				    	<option value="Menikah">Menikah</option>
				    	<option value="Belum">Belum</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Pendidikan Terakhir</label>
				    <select name="pendidikan" class="form-control" required>
				    	<option value="">-- Pilih Salah Satu --</option>
				    	<option value="11">SMP</option>
				    	<option value="12">SMA</option>
				    	<option value="13">STM</option>
				    	<option value="14">SMK</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Alamat</label>
				    <textarea name="alamat" class="form-control" id="" cols="30" rows="5" style="resize:none;" placeholder="Masukkan Alamat Lengkap"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Upload Fotocopy Ijazah Terakhir</label>
				    <input type="file" name="ijazah" required>
				    <p class="help-block">File type JPG, JPEG, PNG, GIF.</p>
				  </div>
				  <div class="form-group">
				    <label>Upload Fotocopy KTP</label>
				    <input type="file" name="ktp" required>
				    <p class="help-block">File type JPG, JPEG, PNG, GIF.</p>
				  </div>
        	</div>
        	<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
					<label>Telepon / HP</label>
					<input type="tel" class="form-control" placeholder="Nomor telepon / hp" name="telepon" required>
				</div>
				<div class="form-group">
				    <label>Kejuruan yang Dipilih</label>
				    <select name="kejuruan" class="form-control" required>
				    	<option value="">-- Pilih Salah Satu --</option>
				    	<?php foreach ($result as $data) { ?>
		    			<option value="<?= $data['KejuruanID'] ?>"><?= $data['KejuruanNama'] ?></option>
				    	<?php } ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Agama</label>
				    <select name="agama" class="form-control" required>
				    	<option value="">-- Pilih Salah Satu --</option>
				    	<option value="5">Budha</option>
				    	<option value="4">Hindu</option>
				    	<option value="1">Islam</option>
				    	<option value="3">Katholik</option>
				    	<option value="2">Kristen</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Pengalaman Kursus</label>
				    <textarea name="pkursus" class="form-control" id="" cols="30" rows="5" style="resize:none;" placeholder="Masukkan Pengalaman Kursus"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Pengalaman Kerja</label>
				    <textarea name="pkerja" class="form-control" id="" cols="30" rows="5" style="resize:none;" placeholder="Masukkan Pengalaman Kerja"></textarea>
				  </div>
				  <div class="form-group">
				    <label>Nama Orangtua / Wali</label>
				    <input type="text" name="namaOrtu" class="form-control" placeholder="Nama Orangtua / Wali" required>
				  </div>
				  <div class="form-group">
				    <label>Pekerjaan Orangtua / Wali</label>
				    <input type="text" name="pkOrtu" class="form-control" placeholder="Pekerjaan Orangtua / Wali" required>
				  </div>
				  <div class="form-group">
				    <label>Alamat Orangtua / Wali</label>
				    <input type="text" name="alamatOrtu" class="form-control" placeholder="Alamat Orangtua / Wali" required>
				  </div>
				  <input type="submit" name="daftar" value="Daftar" class="btn btn-primary btn-block">
        	</div>
        	</form>
        </div>
      </div>