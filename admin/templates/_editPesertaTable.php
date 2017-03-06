<?php 

if (!isset($_GET['edit'])) {
	header('Location: http://anonymous/project_blk/admin/peserta');
}

$edit = getCurrentPeserta($_GET['edit']);

?>
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<div class="well" style="background-color:skyblue;color:white;">
	<h2><i class="glyphicon glyphicon-user"></i> Total Users (<?= usersTotal(); ?>)</h2>
</div>
<a href="http://anonymous/project_blk/admin/peserta"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
<hr>

	<?php if (isset($_GET['success'])) { ?>
            
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='http://anonymous/project_blk/admin/peserta'">&times;</span></button>
        <?= $_GET['success'] ?>
      </div>

    <?php } ?>

    <?php if (isset($_GET['err'])) { ?>
            
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='http://anonymous/project_blk/admin/peserta'">&times;</span></button>
        <?= $_GET['err'] ?>
      </div>

    <?php } ?>

	<div class="row">
		<form action="./config/editPesertaProses.php" method="POST">
		<div class="col-md-6 col-sm-6 col-xs-12">
			  <div class="form-group">
			    <label>Nama Lengkap</label>
			    <input type="text" class="form-control" name="nama" value="<?= $edit[0]['nama'] ?>" required>
			  </div>
			  <div class="form-group">
			    <label>Kejuruan</label>
			    <select name="kejuruan" class="form-control" required>
			    	<option value="<?= $edit[0]['id_kejuruan'] ?>" selected><?= getKejuruan($edit[0]['id_kejuruan']) ?></option>
			    	<?php 
			    	$kejuruan = getAllKejuruan($edit[0]['id_kejuruan']);
			    	foreach ($kejuruan as $datas) { ?>
			    		<option value="<?= $datas['id_kejuruan'] ?>"><?= $datas['nama_kejuruan'] ?></option>
			    	<?php } ?>
			    </select>
			  </div>
			  <div class="form-group">
			    <label>NIK</label>
			    <input type="text" class="form-control" name="nik" value="<?= $edit[0]['nik'] ?>" required>
			  </div>
			  <div class="form-group">
			    <label>Tempat, Tanggal Lahir</label>
			    <input type="text" class="form-control" name="ttl" value="<?= $edit[0]['ttl'] ?>" required>
			  </div>
			  <div class="form-group">
			    <label>Gender</label>
			    <select name="gender" class="form-control" required>
			    	<option value="<?= $edit[0]['jk'] ?>" selected><?= $edit[0]['jk'] ?></option>
			    	<?php if ($edit[0]['jk'] == 'pria') { ?>
			    	<option value="wanita">Wanita</option>
			    	<?php } else if ($edit[0]['jk'] == 'wanita') { ?>
			    	<option value="pria">pria</option>
			    	<?php } ?>
			    </select>
			  </div>
			  <div class="form-group">
			    <label>Agama</label>
			    <select name="agama" class="form-control" required>
			    	<option value="<?= $edit[0]['id_agama'] ?>" selected><?= getAgama($edit[0]['id_agama']) ?></option>
			    	<?php 
			    	$kejuruan = getAllAgama($edit[0]['id_agama']);
			    	foreach ($kejuruan as $datas) { ?>
			    		<option value="<?= $datas['id_agama'] ?>"><?= $datas['nama'] ?></option>
			    	<?php } ?>
			    </select>
			  </div>
			  <div class="form-group">
			    <label>Status Kawin</label>
			    <select name="skawin" class="form-control" required>
			    	<option value="<?= $edit[0]['skawin'] ?>" selected><?= $edit[0]['skawin'] ?></option>
			    	<?php if ($edit[0]['skawin'] == 'Menikah') { ?>
			    	<option value="Belum">Belum</option>
			    	<?php } else { ?>
			    	<option value="Menikah">Menikah</option>
			    	<?php } ?>
			    </select>
			  </div>
			  <div class="form-group">
			    <label>Pendidikan</label>
			    <select name="pendidikan" class="form-control" required>
			    	<option value="<?= $edit[0]['id_pendidikan'] ?>" selected><?= getPendidikan($edit[0]['id_pendidikan']) ?></option>
			    	<?php 
			    	$kejuruan = getAllPendidikan($edit[0]['id_pendidikan']);
			    	foreach ($kejuruan as $datas) { ?>
			    		<option value="<?= $datas['id_pendidikan'] ?>"><?= $datas['nama'] ?></option>
			    	<?php } ?>
			    </select>
			  </div>
			  <div class="form-group">
				<label>Telepon / HP</label>
				<input type="tel" name="telepon" name="telp" class="form-control" value="<?= $edit[0]['telp'] ?>" required>
			  </div>
			  <div class="form-group">
			    <label>Status Peserta</label>
			    <select name="status_peserta" class="form-control" required>
			    	<?php if ($edit[0]['status_peserta'] == '0') { ?>
			    	<option value="0" selected>Belum Terdaftar</option>
			    	<option value="1">Sudah Terdaftar</option>
			    	<?php } else { ?>
			    	<option value="1" selected>Sudah Terdaftar</option>
			    	<option value="0">Belum Terdaftar</option>
			    	<?php } ?>
			    </select>
			  </div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" cols="30" rows="4" class="form-control" style="resize: none;" required><?= $edit[0]['alamat'] ?></textarea>
			</div>
			<div class="form-group">
			<label>Pengalaman Kursus</label>
			<textarea name="p_kursus" cols="30" rows="4" class="form-control" style="resize: none;"><?= $edit[0]['p_kursus'] ?></textarea>
			</div>
			<div class="form-group">
			<label>Pengalaman kerja</label>
			<textarea name="p_kerja" cols="30" rows="4" class="form-control" style="resize: none;"><?= $edit[0]['p_kerja'] ?></textarea>
			</div>
			<div class="form-group">
				<label>Nama Orang Tua</label>
				<input type="text" name="nama_ortu" name="telp" class="form-control" value="<?= $edit[0]['nama_ortu'] ?>" required>
			</div>
			<div class="form-group">
				<label>Pekerjaan Orang Tua</label>
				<input type="text" name="pk_ortu" name="telp" class="form-control" value="<?= $edit[0]['pk_ortu'] ?>" required>
			</div>
			<div class="form-group">
			<label>Alamat Orang Tua</label>
			<textarea name="alamat_ortu" cols="30" rows="4" class="form-control" style="resize: none;"><?= $edit[0]['alamat_ortu'] ?></textarea>
			</div>
			<div class="form-group">
				<label>Tanggal Daftar</label>
				<input type="text" name="tanggalDaftar" name="telp" class="form-control" value="<?= $edit[0]['tanggalDaftar'] ?>" readonly>
			</div>
			<input type="hidden" value="<?= $edit[0]['id_peserta'] ?>" name="id_peserta">
			<input type="submit" name="edit" value="Edit" class="btn btn-primary btn-block">
		</div>
		</form>
	</div>

</div>
</div>