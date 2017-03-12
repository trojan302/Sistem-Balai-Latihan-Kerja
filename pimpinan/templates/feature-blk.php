      <!-- START THE FEATURETTES -->

      <?php foreach ($features as $data) { ?>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?= $data['judulFeature'] ?></h2>
          <p class="lead"><?= $data['deskFeature'] ?></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block img-thumbnail" src="<?= $url ?>staf/libs/photos/<?= $data['images'] ?>">
        </div>
      </div>

      <hr class="featurette-divider">

      <?php } ?>

      <!-- /END THE FEATURETTES -->