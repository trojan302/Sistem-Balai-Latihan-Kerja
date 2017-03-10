<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <a href="<?= $url ?>admin/"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
  <hr>

    <?php if (isset($_GET['success'])) { ?>
            
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/contactpage'">&times;</span></button>
        <?= $_GET['success'] ?>
      </div>

    <?php } ?>

    <?php if (isset($_GET['err'])) { ?>
            
      <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/contactpage'">&times;</span></button>
        <?= $_GET['err'] ?>
      </div>

    <?php } ?>

  	<div class="row">

        <div class="col-md-6">
          <h4 class="label label-info">Editable</h4>
          <hr>
          <?php include '_contactFormReadyEditable.php'; ?>
        </div>

        <div class="col-md-6">
          <h4 class="label label-info">Preview</h4>
          <hr>
          <?php include '_contactPreview.php'; ?>
        </div>

    </div>

  </div>
</div>