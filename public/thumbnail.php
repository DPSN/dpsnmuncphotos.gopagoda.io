<?php
$im = imagecreatefromjpeg("../app/storage/meta/dpsnmunccontents/" + $_GET['img']);

header('Content-Type: image/jpeg');

imagejpeg($im, NULL, 0);
imagedestroy($im);

?>
