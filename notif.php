<?php 
session_start();
require './config/conn.php';

if (!isset($_SESSION['daftar'])) {
	header('Location: pendaftaran?err='. urlencode('Registration falilure!!!'));
}

function generatorUsers($id){

	$query = "SELECT * FROM peserta WHERE id_peserta='$id'";
    $sql = mysql_query($query);
    $result = mysql_fetch_assoc($sql);

    $nama = $result['nama'];
    $tanggalDaftar = $result['tanggalDaftar'];
    $id_peserta = $result['id_peserta'];

    $exname = explode(" ", $nama);
	$uniq = str_replace("-", "", $tanggalDaftar);
	$username = $exname[0]."ID-".$uniq;
	$password = md5($username);
	$date = date('Y-m-d');

	$data = array(
		'id_peserta' => $id_peserta,
		'username' => $username,
		'password' => $password,
		'created' => date('Y-m-d')
	);

	return $data;

}

$username = generatorUsers($_SESSION['daftar'])['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Balai Latihan Kerja Pemkab Magelang, Didedikasikan untuk memudahkan masyarakat mengakses informasi dari Balai Latihan Kerja Pemkab Magelang">
    <meta name="author" content="Betta Dev Indonesia | Github : @trojan302 | Fanspage : @bettadevindonesia">

    <title>Balai Latihan Kerja | PEMKAB Magelang</title>
    <link rel="icon" href="http://localhost/project_blk/libs/photos/icon_blk.png">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./libs/fonts/css/font-awesome.min.css">
    <link href="./libs/style.css" rel="stylesheet">

  </head>

  <body class="container">

  <hr>

	<?php if (isset($_GET['success'])) { ?>

		        <div class="alert alert-success alert-dismissible" role="alert">
		          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		          <?php echo $_GET['success']; ?>
		        </div>
		        
	<?php } ?>

	<a href="http://localhost/project_blk/">Back to Home</a>
	<hr>


	<div class="jumbotron text-center">
		
		<h2>PENTING !!!</h2>
		<p>Anda Terdaftar sebagai user <code><?= $username; ?></code> dengan password sementara yang sama. Tetapi anda belum bisa login untuk sekarang ini karena menunggu hasil seleksi dari panitia.</p>
		<p>Silahkan klik <a target="_blank" href="print?print=bukti_daftar&id=<?= $_SESSION['daftar'] ?>" class="btn btn-default"><i class="glyphicon glyphicon-print"></i> Print</a></p>
		<br><br><br>
		Terimakasih
		<br><br><br>
		Petugas Balai Latihan Kerja Kabupaten Magelang
	</div>


	  <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?= date('Y'); ?> Betta Dev Indonesia, Ltd. 
        &middot; <a href="#">Privacy</a> 
        &middot; <a href="#">Terms</a></p>
      </footer>

    </div>
    <script src="node_modules/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
  </body>
</html>

