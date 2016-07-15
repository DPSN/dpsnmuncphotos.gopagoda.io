<?php
  header('Content-Type: image/png');
  readfile("../app/meta/dpsnmunccontents/" + $_GET['img']);
?>
