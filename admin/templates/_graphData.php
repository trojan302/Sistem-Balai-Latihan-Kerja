<div class="row" style="margin-top: 20px;">
          	<div class="col-md-6 col-sm-6">
          		<table class="table table-bordered">
				  <caption><b>Minat Kejuruan</b></caption>
				  <thead>
				  	<tr>
				  		<td>#</td>
				  		<td>Nama Kejuruan</td>
				  		<td>Minat</td>
				  	</tr>
				  </thead>
				  <tbody>
				  <?php for ($i = 0; $i < count($data['kejuruan'])  ; $i++) { ?>
				  	<tr>
				  		<td><?= $no++ ?></td>
				  		<td><?= $data['kejuruan'][$i] ?></td>
				  		<td><?= $data['minat'][$i] ?></td>
				  	</tr>
				  <?php } ?>
				  </tbody>
				</table>
          	</div>
          	<div class="col-md-6 col-sm-6">
          		<canvas id="polarAreaChart"></canvas>
          	</div>          	
          </div>
          
        </div>
      </div>
    </div>