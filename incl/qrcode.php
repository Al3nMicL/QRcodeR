<?php
//include in index.php to generate qrcode images
header('Content-Type: image/png'); //must set or else script renders string output
require_once '../vendor/autoload.php'; //loads qrcode vendor libraries
$qrc = new Endroid\QrCode\QrCode(); //inits a new class from lib

//if(isset($_GET['text'])){
 	$img_size = isset($_GET['size']) ? $_GET['size'] : 200; //sets default size if not given
 	$img_pad = isset($_GET['padding']) ? $_GET['padding'] : 10; //sets default padding
 	$img_text = isset($_GET['input']) ? $_GET['input'] : 'Follow instructions given.';
 	
 	$qrc->setText($img_text); //text sent to render
	$qrc->setSize($img_size);
	$qrc->setPadding($img_pad);

	$qrc->render();

//}


?>
