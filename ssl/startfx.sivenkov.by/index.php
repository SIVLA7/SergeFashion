<?php
  setcookie("language", 'ru', time() + (10 * 365 * 24 * 60 * 60));
  $url2 = 'ru/index.php';
  exit(header('Location: ' . $url2));
?>
