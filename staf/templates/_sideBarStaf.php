<div class="col-lg-4 col-md-3 col-sm-4 hidden-sm">
	<ul class="list-group">
	  <li class="list-group-item">
	    <a href="?profile=<?= urlencode($staf['nama']) ?>"><i class="fa fa-id-card pull-right"></i> Profil</a>			    
	  </li>
	  <li class="list-group-item">
	    <a href="?share_materi=<?= urlencode($staf['nama']) ?>&stafID=<?= $staf['stafID'] ?>"><i class="fa fa-share-alt-square pull-right"></i> Bagi Materi</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?list_materi=<?= urlencode($staf['nama']) ?>&stafID=<?= $staf['stafID'] ?>"><i class="fa fa-list-alt pull-right"></i> List Materi</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?list_peserta=<?= urlencode($staf['nama']) ?>&staf_kejuruan=<?= $staf['id_kejuruan'] ?>"><i class="fa fa-list-ol pull-right"></i> List Peserta</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?ganti_password=true">Ganti Password</a>
	  </li>
	</ul>
</div>