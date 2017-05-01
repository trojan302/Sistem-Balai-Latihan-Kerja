<?php 

require './config/function.php';
require './config/counterFunction.php';

$ip      = ip_user();
$browser = browser_user();
$os      = os_user();

// Check bila sebelumnya data pengunjung sudah terrekam
if (!isset($_COOKIE['VISITOR'])) {

    // Masa akan direkam kembali
    // Tujuan untuk menghindari merekam pengunjung yang sama dihari yang sama.
    // Cookie akan disimpan selama 24 jam
    $duration = time()+60*60*24;

    // simpan kedalam cookie browser
    setcookie('VISITOR',$browser,$duration);

    // SQL Command atau perintah SQL INSERT
    $sql = "INSERT INTO counter (ip, os, browser) VALUES ('$ip', '$os', '$browser')";

    // variabel { $db } adalah perwakilan dari koneksi database lihat config.php
    $query = mysql_query($sql);
}

$data = profilBlk();

require './templates/header2.php';
require './templates/profil-container.php';
require './templates/footer.php';
?>