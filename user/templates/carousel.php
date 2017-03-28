<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php for ($i = 0; $i < $rows ; $i++) { 
          if ($i == 0){?>
          <li data-target="#myCarousel" data-slide-to="<?= $i; ?>" class="active"></li>
        <?php }else{ ?>
          <li data-target="#myCarousel" data-slide-to="<?= $i; ?>"></li>
        <?php } }?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php for ($i = 0; $i < $rows ; $i++) {
                if ($i == 0){ ?>
        <div class="item active">
          <img class="first-slide" src="http://localhost/project_blk/v.1.0.3/libs/photos/<?= $slides[$i]['filename'] ?>" alt="<?= $slides[$i]['judulSlides'] ?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><?= $slides[$i]['judulSlides'] ?></h1>
              <p><?= $slides[$i]['deskripsi'] ?></p>
            </div>
          </div>
        </div>
        <?php }else{ ?>
        <div class="item">
          <img class="first-slide" src="http://localhost/project_blk/v.1.0.3/libs/photos/<?= $slides[$i]['filename'] ?>" alt="<?= $slides[$i]['judulSlides'] ?>">
          <div class="container">
            <div class="carousel-caption">
              <h1><?= $slides[$i]['judulSlides'] ?></h1>
              <p><?= $slides[$i]['deskripsi'] ?></p>
            </div>
          </div>
        </div>
        <?php } } ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->