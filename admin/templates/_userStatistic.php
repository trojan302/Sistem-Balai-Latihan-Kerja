<?php 

require '../config/conn.php';
require '../config/userStatistic.php';

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


$sql = "SELECT * FROM counter ORDER BY date_created DESC";
$query = mysql_query($sql);

?>
<table border="1">
    <tr>
        <td>IP</td>
        <td>Browser</td>
        <td>OS</td>
        <td>Tanggal</td>
    </tr>
    <?php
    while ($row= mysql_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $row['ip'];?></td>
            <td><?php echo $row['browser'];?></td>
            <td><?php echo $row['os'];?></td>
            <td><?php echo $row['date_created'];?></td>
        </tr>
    <?php } ?>
</table>