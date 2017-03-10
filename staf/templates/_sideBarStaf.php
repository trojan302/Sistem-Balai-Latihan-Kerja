<div class="col-lg-4 col-md-3 col-sm-4 hidden-sm">
	<ul class="list-group">
	  <li class="list-group-item">
	    <a href="?profile=<?= urlencode($staf['nama']) ?>">Profile</a>			    
	  </li>
	  <li class="list-group-item">
	    <a href="?share_materi=<?= urlencode($staf['nama']) ?>&stafID=<?= $staf['stafID'] ?>">Share Materi</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?list_materi=<?= urlencode($staf['nama']) ?>&stafID=<?= $staf['stafID'] ?>">List Materi</a>
	  </li>
	</ul>
</div>