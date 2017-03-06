<div class="row" id="VisiMisi">

        <div class="col-md-4">
          <h4 class="label label-info">Editable</h4>
          <hr>
          
          <b>Visi &amp; Misi</b>
          <hr>

          <ul class="list-group">
            <?php foreach ($visimisi as $item): ?>
              <li class="list-group-item"><a href="?vm=<?= $item['idVisiMisi'] ?>#VisiMisi">Visi Misi #<?= $no++; ?></a></li>
            <?php endforeach; ?>
          </ul>

        </div>

        <div class="col-md-8">
          <h4 class="label label-info">Preview</h4>
          <hr>
          
          <?php 
            if (!isset($_GET['editVm'])) {

              include '_listVisiMisi.php';

            }else{

              include '_editVisiMisi.php';

            }
          ?>

        </div>

    </div>