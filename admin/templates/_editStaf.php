<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2>Edit Staf</h2>
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
          <input name="nama" type="text" class="form-control" value="<?= $data[0]['nama'] ?>" required>
        </div>
        <div class="form-group">
          <label>Telepon/HP</label>
          <input name="telepon" type="tel" class="form-control" value="<?= $data[0]['telepon'] ?>" required>
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input name="email" type="email" class="form-control" value="<?= $data[0]['email'] ?>" required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input name="username" type="text" class="form-control" value="<?= $data[0]['username'] ?>" required>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea name="alamat" class="form-control" rows="4" style="resize:none;" required><?= $data[0]['alamat'] ?></textarea>
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <?php if ($data[0]['jabatan'] == 'instruktur'): ?>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="jabatan" checked value="instruktur"> Instruktur
              </label>
              <label>
                <input type="checkbox" name="jabatan" value="pimpinan"> Pimpinan
              </label>
            </div>
          <?php else: ?>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="jabatan" value="instruktur"> Instruktur
              </label>
              <label>
                <input type="checkbox" name="jabatan" checked value="pimpinan"> Pimpinan
              </label>
            </div>
          <?php endif; ?>
        </div>
        <div class="form-group">
          <label>Kejuruan</label>
          <select name="kejuruan" class="form-control" required>
            <option value="<?= $data[0]['id_kejuruan'] ?>" selected><?= getKejuruan($data[0]['id_kejuruan']) ?></option>
            <?php 
            $kejuruan = getAllKejuruan($data[0]['id_kejuruan']);
            foreach ($kejuruan as $datas) { ?>
              <option value="<?= $datas['id_kejuruan'] ?>"><?= $datas['nama_kejuruan'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Upload Image</label>
          <input name="photo" type="file" value="<?= $data[0]['photo'] ?>" class="form-control">
          <p class="help-block">Gambar Sekarang : <?= $data[0]['photo'] ?></p>
        </div>
        <input type="hidden" name="stafID" value="<?= $data[0]['stafID'] ?>">
        <input type="hidden" name="created" value="<?= $data[0]['created'] ?>">
        <input type="hidden" name="updated" value="<?= date('Y-m-d'); ?>">
        <input type="submit" name="editStaf" value="Edit Staf" class="btn btn-default">
      </form>
      
  </div>
</div>