<?php
  header('Content-Type: image/png');
  readfile("mstore/" + $_GET['img']);
?>
