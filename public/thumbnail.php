<?php
$im = imagecreatefromjpeg("photostore/".$_GET['folder']."/".$_GET["img"]);

header('Content-Type: image/jpeg');

imagejpeg($im, NULL, 1);
imagedestroy($im);

?>
