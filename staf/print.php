<?php 

require './config/function.php';

$print = isset($_GET['print']) && isset($_GET['id']) ? $_GET['id'] : header('Location: http://localhost/project_blk/user/dashboard');

require_once("../vendor/autoload.php");
// reference the Dompdf namespace
use Dompdf\Dompdf;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/project_blk/user/contents.php?id='.$_GET['id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);

// // instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($contents);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A5', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

exit(0);

?>