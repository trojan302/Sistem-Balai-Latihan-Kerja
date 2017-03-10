<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <a href="<?= $url ?>admin/"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
  <hr>


    <?php if (isset($_GET['tambah']) == 'loker') { ?>
      
      <?php require './templates/_tambahLoker.php'; ?>

    <?php } else if (isset($_GET['editLoker'])) { ?>

      <?php 
        $data = getCurrentLoker($_GET['editLoker']);
        require './templates/_editLoker.php';
      ?>

    <?php } else { ?>
  
  	<div class="row">

        <div class="col-md-4">
          <h4 class="label label-info">Editable</h4>
          <hr>
          <?php include '_lokerEditable.php'; ?>
        </div>

        <div class="col-md-8">
          <h4 class="label label-info">Preview</h4>
          <hr>
            <?php include '_lokerPreview.php'; ?>
        </div>

    </div>

    <?php } ?>

  </div>
</div>