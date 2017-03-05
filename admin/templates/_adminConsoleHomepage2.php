<div class="row" id="Features">

        <div class="col-md-4">
          <h4 class="label label-info">Editable</h4>
          <hr>
          
          <a href="?tambah=features" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Features</a> <br><br>
          <span><b>Lists Judul Feature</b></span>
          <ul class="list-group">
          <?php if (getRowOfFeatures() === 0) { ?>
            <li class="list-group-item">Tidak ada Features</li>
          <?php } else { 
          foreach ($features as $data) { ?>
            <li class="list-group-item"><a href="?judul=<?= $data['idFeatures'] ?>#Features"><?= $data['judulFeature'] ?></a></li>
          <?php } } ?>
          </ul>

        </div>

        <div class="col-md-8">
          <h4 class="label label-info">Preview</h4>
          <hr>

          <?php if (!isset($_GET['judul'])) { 
          $currFeatures = getCurrentFeatures(1);
          ?>
            
           <!--  echo $data['deskFeature']; -->

           <div class="panel panel-default">
              <div class="panel-heading">
              <?= $currFeatures['judulFeature'] ?>
              <a href="?edit=<?= $currFeatures['idFeatures'] ?>" class="btn btn-success btn-xs pull-right">Edit</a>
              </div>
              <div class="panel-body">
                <img src="./libs/photos/<?= $currFeatures['images'] ?>" alt="Images Features" class="img-thumbnail pull-left" style="width: 20%;margin:5px;">
                <p style="text-indent:50px;" class="text-justify"><?= $currFeatures['deskFeature'] ?></p>
                <div class="clearfix"></div>
              </div>
            </div>

          <?php }else{
          $currFeatures = getCurrentFeatures($_GET['judul']);
          ?>

            <div class="panel panel-default">
              <div class="panel-heading">
              <?= $currFeatures['judulFeature'] ?>
              <a href="?edit=<?= $currFeatures['idFeatures'] ?>" class="btn btn-success btn-xs pull-right">Edit</a>
              </div>
              <div class="panel-body">
                <img src="./libs/photos/<?= $currFeatures['images'] ?>" alt="Images Features" class="img-thumbnail pull-left" style="width: 20%;margin:5px;">
                <p style="text-indent:50px;" class="text-justify"><?= $currFeatures['deskFeature'] ?></p>
                <div class="clearfix"></div>
              </div>
            </div>

          <?php } ?>

        </div>

    </div>