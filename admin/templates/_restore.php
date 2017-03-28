<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      
      <h2><i class="glyphicon glyphicon-cloud-upload"></i> Restore Database</h2>
      <hr>

      <?php
      if (isset($_GET['restore']) && isset($_GET['delete'])) {

        $file = $_GET['delete'];
        unlink("./database/".$file);
        echo "<script>window.location.href='http://localhost/project_blk/v.1.0.3/admin/backups?restore=true'</script>";

      }

      ?>
      <div class="row">
        <div class="col-md-8 col-sm-6">
          
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
                  <a href="http://localhost/project_blk/v.1.0.3/admin/backups?restore=true&delete=<?= $filename ?>" class="btn btn-danger btn-xs">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>
                  <a href="http://localhost/project_blk/v.1.0.3/admin/download.php?filename=<?= $filename ?>" class="btn btn-info btn-xs">
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
        <div class="col-md-4 col-sm-6">
          <h4>Restore Database</h4>
          <hr>

          <form action="http://localhost/project_blk/v.1.0.3/admin/config/uploadDataRestore.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>File To Restore</label>
              <input type="file" name="dataRestore" required class="form-control">
            </div>
            <div class="form-group">
              <label>Database Destination</label>
              <input type="text" name="dbname" placeholder="Database destination" required class="form-control">
            </div>
            <input type="submit" name="upload" value="Go" class="btn btn-default">
          </form>
        </div>
      </div>
  </div>
</div>