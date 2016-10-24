<?php
//ARCHIVE AT https://github.com/tinify/tinify-php/archive/master.zip
require_once("tinypng/lib/Tinify/Exception.php");
require_once("tinypng/lib/Tinify/ResultMeta.php");
require_once("tinypng/lib/Tinify/Result.php");
require_once("tinypng/lib/Tinify/Source.php");
require_once("tinypng/lib/Tinify/Client.php");
require_once("tinypng/lib/Tinify.php");
//\Tinify\setKey("sDDhGYEBzzRcw95Y6yAIhB8AvAez-tte");
//\Tinify\setKey("PQxv3lasuwQKdHG2ZUFRuZ79NnF95AdZ");
\Tinify\setKey("Vza5ps1YpCuS68cv3C_bSoqauwCNQnkR");
 
$dir = 'oeuvres/';
$dir_final = 'oeuvres_comp/';
$images = scandir($dir);
$images = array_diff($images, array('.', '..'));
 
foreach ($images as $image) {
    $source = \Tinify\fromFile($dir.$image);
    $source->toFile($dir_final.$image);
} 
echo "All images are compressed.";
?>