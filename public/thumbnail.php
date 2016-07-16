<?php
$im = imagecreatefromjpeg("mstore/" + $_GET['img']);

header('Content-Type: image/jpeg');

imagejpeg($im, NULL, 0);
imagedestroy($im);

?>
