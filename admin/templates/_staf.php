<?php if (isset($_GET['delete'])) { deleteStaf($_GET['delete']); } ?>
<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2>Staf Configuration</h2>
      <hr>

      <a href="?_tambahStaf" class="btn btn-primary btn-xs" style="margin-right: 30px;">
        <i class="glyphicon glyphicon-plus"></i> Tambah Staf
      </a>
      
      <button id="staf-pdf" class="btn btn-danger btn-xs disabled" disabled><i class="glyphicon glyphicon-print"></i> PDF</button>
      <button id="staf-png" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print"></i> PNG</button>
      <button id="staf-json" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-print"></i> JSON</button>
      <button id="staf-csv" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-print"></i> CSV</button>
      <button id="staf-xml" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-print"></i> XML</button>
      <button id="staf-sql" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-print"></i> SQL</button>
      <button id="staf-word" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-print"></i> MS Word</button>
      <button id="staf-excel" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-print"></i> MS Exel</button>

      <hr>
      <?php if($rowStaf < 1): ?>
      <div class="text-center">Data staf is empty...</div>
      <?php else: ?>
      <table id="table-staf" class="table table-condensed table-striped table-hover">
      <thead>
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
        </thead>
        <tbody>
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
        </tbody>
      </table>
      <?php endif; ?>
      
  </div>
</div>