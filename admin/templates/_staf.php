<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2>Staf Configuration</h2>
      <hr>

      <a href="?_tambahStaf" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Staf</a>

      <hr>
      <?php if($rowStaf < 1): ?>
      <div class="text-center">Data staf is empty...</div>
      <?php else: ?>
      <table class="table">
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Kejuruan</th>
          <th>Jabatan</th>
          <th>Action</th>
        </tr>
        <?php foreach ($getStaf as $data) { ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['telepon'] ?></td>
          <td><?= $data['alamat'] ?></td>
          <td><?= $data['email'] ?></td>
          <td><?= getKejuruan($data['id_kejuruan']) ?></td>
          <td><?= ucfirst($data['jabatan']) ?></td>
          <td>
            <a href="?delete=<?= $data['stafID'] ?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
            <a href="?_editStaf=<?= $data['stafID'] ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
          </td>
        </tr>
        <?php } ?>
      </table>
      <?php endif; ?>
      
  </div>
</div>