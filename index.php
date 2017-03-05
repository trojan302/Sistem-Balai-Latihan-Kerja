<?php

require './config/function.php';

$rows = rowOfSlide();
$slides = slideShow();
$visiMisi = visiMisi();
$features = features();

require './templates/header.php';
require './templates/carousel.php';
require './templates/visi-misi.php';
require './templates/feature-blk.php';
require './templates/footer.php';
?>