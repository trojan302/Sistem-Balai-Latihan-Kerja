<div class="starter-template">

	<h1><i class="glyphicon glyphicon-book"></i> Dashboard</h1>
	<div class="row">
		
		<?php require '_sideBarStaf.php'; ?>

		<div class="col-lg-8 col-md-9 col-sm-8">
			<h2>Selamat datang, <?= $staf['nama'] ?></h2>
			<hr>

			<?php if (isset($_GET['err'])) { ?>
            
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>staf/dashboard'">&times;</span></button>
              <?= $_GET['err'] ?>
            </div>

          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" onclick="window.location.href='<?= $url ?>staf/dashboard'">&times;</span></button>
              <?= $_GET['success'] ?>
            </div>

          <?php } ?>

			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<small>Hit Counter</small>
					<canvas id="polarAreaChart"></canvas>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<small>OS Penggakses</small>
					<canvas id="pieChart"></canvas>
				</div>
				<div class="container-fluid">
					<small>Minat Kejuruan</small>
					<canvas id="barChart"></canvas>
				</div>
			</div>
			
		</div>

	</div>

</div>