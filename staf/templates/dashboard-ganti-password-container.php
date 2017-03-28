<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Halaman Password</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<h2>Ganti Password</h2>
			<hr>

			<?php if (isset($_GET['err'])) { ?>
            
	            <div class="alert alert-danger alert-dismissible" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='http://localhost/project_blk/v.1.0.3/user/dashboard'">&times;</span></button>
	              <?= $_GET['err'] ?>
	            </div>

	          <?php } ?>

	          <?php if (isset($_GET['success'])) { ?>
	            
	            <div class="alert alert-success alert-dismissible" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='http://localhost/project_blk/v.1.0.3/user/dashboard'">&times;</span></button>
	              <?= $_GET['success'] ?>, Silahkan dicek untuk memastikan perubahan kata sandi atau password dengan logout terlebih dahulu.
	            </div>

	          <?php } ?>

	          <?php if (isset($_GET['warning'])) { ?>
	            
	            <div class="alert alert-warning alert-dismissible" role="alert">
	              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='http://localhost/project_blk/v.1.0.3/user/dashboard'">&times;</span></button>
	              <?= $_GET['warning'] ?>
	            </div>

	          <?php } ?>

			<form action="http://localhost/project_blk/v.1.0.3/staf/config/ganti_password.php" method="POST">
				<div class="form-group">
					<label>Username Lama</label>
					<input type="text" name="username_lama" value="<?= getUsername($_SESSION['stafID']) ?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label>Username Baru</label>
					<input type="text" name="username_baru" placeholder="Masukkan username baru..." class="form-control">
				</div>
				<div class="form-group">
					<label>Password Lama</label>
					<input type="password" name="password" placeholder="Password Lama..." class="form-control" required>
				</div>
				<div class="form-group">
					<label>Ulangi Password</label>
					<input type="password" name="re_password" placeholder="Password Lama..." class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password Baru</label>
					<input type="password" name="password1" placeholder="Password Baru..." class="form-control" required>
				</div>
				<div class="form-group">
					<label>Ulangi Password</label>
					<input type="password" name="re_password1" placeholder="Password Baru..." class="form-control" required>
				</div>
				<input type="hidden" name="stafID" value="<?= $_SESSION['stafID'] ?>">
				<input type="submit" name="ganti_password" value="Ganti Password" class="btn btn-default">
			</form>
			
		</div>

	</div>

</div>