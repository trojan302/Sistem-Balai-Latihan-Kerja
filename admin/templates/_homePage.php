<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <a href="<?= $url ?>admin/"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
  <hr>

    <?php 
    if (isset($_GET['tambah'])) {

        require './templates/_tambahConsoleAdmin.php';

    } else if (isset($_GET['edit'])) {

    $data = getCurrentFeatures($_GET['edit']);
      
        require './templates/_editConsoleAdmin.php'; 

    } else {

        require './templates/_adminConsoleHomepage1.php';

        echo "<hr>";
        
        require './templates/_adminConsoleHomepage2.php';

        echo "<hr>";
        
        require './templates/_adminConsoleHomepage3.php';

    } 
    ?>

  </div>
</div>