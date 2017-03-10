<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2>Add Staf</h2>
      <hr>

      <a href="<?= $url ?>admin/staf" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>

      <hr>

      <?php if (isset($_GET['err'])) { ?>
            
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/staf'">&times;</span></button>
          <?= $_GET['err'] ?>
        </div>

      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
        
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/staf'">&times;</span></button>
          <?= $_GET['success'] ?>
        </div>

      <?php } ?>
      
      <form method="POST" action="<?= $url ?>admin/config/prosesTambahStaf.php" enctype="multipart/form-data">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group">
          <label>Telepon/HP</label>
          <input name="telepon" type="tel" class="form-control" placeholder="Telepon/HP" required>
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input name="email" type="email" class="form-control" placeholder="Email Address" required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input name="username" type="text" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" rows="4" style="resize:none;" required></textarea>
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <select name="jabatan" class="form-control" required>
            <option value="">Pilih Jabatan</option>
            <option value="instruktur">Instruktur</option>
            <option value="pimpinan">Pimpinan</option>
          </select>
        </div>
        <div class="form-group">
          <label>Kejuruan</label>
          <select name="kejuruan" class="form-control" required>
            <option value="">Pilih Kejuruan</option>
            <?php foreach ($kejuruanData as $data) { ?>
              <option value="<?= $data['id_kejuruan'] ?>"><?= $data['nama_kejuruan'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Upload Image</label>
          <input name="photo" type="file" class="form-control" required>
          <p class="help-block">Image only .jpg, .jpeg, png and .gif</p>
        </div>
        <input type="hidden" name="idAdmin" value="1">
        <input type="hidden" name="created" value="<?= date('Y-m-d') ?>">
        <input type="submit" name="tambahStaf" value="Tambah Staf" class="btn btn-default">
      </form>
      
  </div>
</div>