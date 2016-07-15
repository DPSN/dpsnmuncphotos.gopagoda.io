<?php
  header('Content-Type: image/png');
  readfile("../app/storage/meta/dpsnmunccontents/" + $_GET['img']);
?>
