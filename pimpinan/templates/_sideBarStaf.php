<div class="col-lg-4 col-md-3 col-sm-4 hidden-sm">
	<ul class="list-group">
	  <li class="list-group-item">
	    <a href="?profile=<?= urlencode($staf['nama']) ?>"><i class="fa fa-id-card pull-right"></i> Profile</a>			    
	  </li>
	  <li class="list-group-item">
	    <a href="?list_peserta=<?= urlencode($staf['nama']) ?>&tampil_peserta=true"><i class="fa fa-list-ul pull-right"></i> List Semua Peserta</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?list_instruktur=<?= urlencode($staf['nama']) ?>&tampil_instruktur=true"><i class="fa fa-list-ul pull-right"></i> List Semua Instruktur</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?list_semua=<?= urlencode($staf['nama']) ?>&tampil_semua=true"><i class="fa fa-list-ul pull-right"></i> List Semua</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?ganti_password=true">Ganti Password</a>
	  </li>
	</ul>
</div>