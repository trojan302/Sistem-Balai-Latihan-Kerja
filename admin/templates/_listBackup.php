<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2><i class="glyphicon glyphicon-calendar"></i> Jadwal Backup Database</h2>
      <hr>

      <table class="table table-condensed table-hover table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Filename</th>
            <th>Dibackup</th>
            <th>Dibuat</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        if (count($listBackup) > 0) {
          $no=1; 
          foreach ($listBackup as $data) { 
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['filename'] ?></td>
            <td><?= $data['jadwal'] ?></td>
            <td><?= $data['created'] ?></td>
            <td>
              <a href="?delete=<?= $data['idBackup'] ?>" class="btn btn-danger btn-xs" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
              <a href="" class="btn btn-success btn-xs" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
            </td>
          </tr>
        <?php } 
        }else{ ?>
          <tr>
            <td colspan="5" align="center">Jadwal Backup tidak ada</td>
          </tr>
        <?php }?>
        </tbody>
      </table>
      
  </div>
</div>