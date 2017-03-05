    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <?php foreach ($visiMisi as $vm) { ?>
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <p><?= $vm['text'] ?></p>
        </div>
        <?php } ?>
      </div><!-- /.row -->