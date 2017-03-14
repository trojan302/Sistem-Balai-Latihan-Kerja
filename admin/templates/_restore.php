<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2><i class="glyphicon glyphicon-cloud-upload"></i> Restore Database</h2>
      <hr>

      <?php
      if (isset($_GET['restore']) && isset($_GET['data'])) {
          
          $import = IMPORT_TABLES('localhost', 'root', '', 'project_blk', 'http://localhost/project_blk/admin/database/'.$_GET['data']);
          
          if ($import == true) {
            echo "<script>window.location.href='http://localhost/project_blk/admin/backups?restore=true'</script>";
          }

      }else if (isset($_GET['restore']) && isset($_GET['delete'])) {

        $file = $_GET['delete'];
        unlink("database/".$file);
        echo "<script>window.location.href='http://localhost/project_blk/admin/backups?restore=true'</script>";

      }

      ?>

      <table class="table table-condensed table-hover table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama File</th>
            <th>Permission</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody>
        <?php

        date_default_timezone_set('Asia/Jakarta');

        if ($handle = opendir('database')) {

          $no=1;

            while (false !== ($filename = readdir($handle))) {

                if ($filename != "." && $filename != "..") {
        ?>

        
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $filename ?></td>
            <td><?= Permission($filename) ?></td>
            <td>
              <a href="http://localhost/project_blk/admin/backups?restore=true&delete=<?= $filename ?>" class="btn btn-danger btn-xs">
                <i class="glyphicon glyphicon-trash"></i>
              </a>
              <a href="http://localhost/project_blk/admin/backups?restore=true&data=<?= $filename ?>" class="btn btn-info btn-xs">
                <i class="glyphicon glyphicon-cloud-upload"></i>
              </a>
              <a href="http://localhost/project_blk/admin/database/<?= $filename ?>" class="btn btn-info btn-xs">
                <i class="glyphicon glyphicon-download-alt"></i>
              </a>
            </td>
          </tr>
          

        <?php
                }
            }

            closedir($handle);
        }

        ?>
        </tbody>
      </table>
  </div>
</div>