    <div class="container marketing">
      <div class="row">
        <?php foreach ($visiMisi as $vm) { ?>
        <div class="col-lg-4">
          <?php if ($vm['idVisiMisi'] == 1) { ?>
            <i class="fa fa-user-circle-o fa-4x text-danger"></i>
          <?php }elseif ($vm['idVisiMisi'] == 2) { ?>
            <i class="fa fa-area-chart fa-5x text-primary"></i>
          <?php }else{ ?>
            <i class="fa fa-universal-access fa-4x text-success"></i>
          <?php  } ?>
          <br><br>
          <p><?= $vm['text'] ?></p>
        </div>
        <?php } ?>
      </div>