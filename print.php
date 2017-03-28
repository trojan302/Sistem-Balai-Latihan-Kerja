<?php 

require 'user/config/function.php';

$print = isset($_GET['print']) && isset($_GET['id']) ? $_GET['id'] : header('Location: http://localhost/project_blk/v.1.0.3/');

require_once("vendor/autoload.php");
use Dompdf\Dompdf;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/project_blk/v.1.0.3/contents.php?id='.$_GET['id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);

$dompdf = new Dompdf();
$dompdf->loadHtml($contents);
$dompdf->setPaper('A5', 'landscape');
$dompdf->render();
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);

?>