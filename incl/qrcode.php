<?php
//include in index.php to generate qrcode images
header('Content-Type: image/png'); //must set or else script renders string output
require_once '../vendor/autoload.php'; //loads qrcode vendor libraries
$qrc = new Endroid\QrCode\QrCode(); //inits a new class from lib

$qrc->setText('The World is Yours!'); //test text
$qrc->setSize(200);
$qrc->setPadding(10);

$qrc->render();

?>
