<?php 
require './config/function.php';
require './config/counterFunction.php';

$ip      = ip_user();
$browser = browser_user();
$os      = os_user();

if (!isset($_COOKIE['VISITOR'])) {

    $duration = time()+60*60*24;

    setcookie('VISITOR',$browser,$duration);


    $sql = "INSERT INTO counter (ip, os, browser) VALUES ('$ip', '$os', '$browser')";


    $query = mysql_query($sql);
}

$result = kejuruanDibuka('Buka');

require './templates/header2.php';
require './templates/pendaftaran-container.php';
require './templates/footer.php';
?>