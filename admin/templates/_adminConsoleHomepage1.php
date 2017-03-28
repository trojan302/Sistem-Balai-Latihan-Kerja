<div class="row">

        <div class="col-md-4">
          <h4 class="label label-info">Edit</h4>
          <hr>

          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Ganti Slide 1
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <form action="<?= $url ?>admin/config/prosesUpload.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Judul</div>
                        <input id='upload' class="form-control" name="judulSlides" type="text" value="<?= $slide1['judulSlides']; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Slide 1</div>
                        <input id='upload' class="form-control" name="upload1" type="file" value="<?= $slide1['filename']; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Desk</div>
                        <textarea name="deskripsi1" id="" cols="50" rows="4" class="form-control" style="resize: none;"><?= $slide1['deskripsi'] ?></textarea>
                      </div>
                    </div>
                    <input type="hidden" name="idSlides" value="<?= $slide1['idSlides'] ?>">
                    <input type="hidden" name="idAdmin" value="<?= $_SESSION['idAdmin'] ?>">
                    <input type="submit" name="slide1" value="Ganti Slide 1" class="btn btn-info">
                  
                </form>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Ganti Slide 2
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <form action="<?= $url ?>admin/config/prosesUpload.php" enctype="multipart/form-data" method="post">
                    
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Judul</div>
                        <input id='upload' class="form-control" name="judulSlides" type="text" value="<?= $slide2['judulSlides']; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Slide 2</div>
                        <input id='upload' class="form-control" name="upload2" type="file" value="<?= $slide2['filename']; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Desk</div>
                        <textarea name="deskripsi2" id="" cols="50" rows="4" class="form-control" style="resize: none;"><?= $slide2['deskripsi'] ?></textarea>
                      </div>
                    </div>
                    <input type="hidden" name="idSlides" value="<?= $slide2['idSlides'] ?>">
                    <input type="hidden" name="idAdmin" value="<?= $_SESSION['idAdmin'] ?>">
                    <input type="submit" name="slide2" value="Ganti Slide 2" class="btn btn-info">

                </form>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Ganti Slide 3
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <form action="<?= $url ?>admin/config/prosesUpload.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Judul</div>
                        <input id='upload' class="form-control" name="judulSlides" type="text" value="<?= $slide3['judulSlides']; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Slide 3</div>
                        <input id='upload' class="form-control" name="upload3" type="file" value="<?= $slide3['filename']; ?>" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Desk</div>
                        <textarea name="deskripsi3" id="" cols="50" rows="4" class="form-control" style="resize: none;"><?= $slide3['deskripsi'] ?></textarea>
                      </div>
                    </div>
                    <input type="hidden" name="idSlides" value="<?= $slide3['idSlides'] ?>">
                    <input type="hidden" name="idAdmin" value="<?= $_SESSION['idAdmin'] ?>">
                    <input type="submit" name="slide3" value="Ganti Slide 3" class="btn btn-info">
                </form>
              </div>
            </div>
          </div>
        </div>

        </div>

        <div class="col-md-8">
          <h4 class="label label-info">Preview</h4>
          <hr>

          <!-- Carousel -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img class="first-slide" src="<?= $url ?>admin/libs/photos/<?= $slide1['filename']; ?>" alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?= $slide1['judulSlides'] ?></h1>
                    <p><?= $slide1['deskripsi'] ?></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img class="second-slide" src="<?= $url ?>admin/libs/photos/<?= $slide2['filename']; ?>" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?= $slide2['judulSlides']; ?></h1>
                    <p><?= $slide2['deskripsi']; ?></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img class="third-slide" src="<?= $url ?>admin/libs/photos/<?= $slide3['filename']; ?>" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1><?= $slide3['judulSlides']; ?></h1>
                    <p><?= $slide3['deskripsi']; ?></p>
                  </div>
                </div>
              </div>
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

          <hr>

          <?php if (isset($_GET['err'])) { ?>
            
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/homepage'">&times;</span></button>
              <?= $_GET['err'] ?>
            </div>

          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>admin/homepage'">&times;</span></button>
              <?= $_GET['success'] ?>
            </div>

          <?php } ?>

        </div>

    </div>