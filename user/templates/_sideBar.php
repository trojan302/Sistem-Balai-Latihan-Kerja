<div class="col-lg-4 col-md-3 col-sm-4 hidden-sm">
	<ul class="list-group">
	  <li class="list-group-item">
	    <a href="?profile=<?= urlencode($peserta['nama']) ?>">Profile</a>			    
	  </li>
	  <li class="list-group-item">
	    <a href="?bukti_daftar=<?= urlencode($peserta['nama']) ?>&peserta_id=<?= $peserta['id_peserta'] ?>">Bukti Pendaftaran</a>
	  </li>
	  <li class="list-group-item">
	    <a href="?ganti_password=true">Ganti Password dan Username</a>
	  </li>
	</ul>
</div>