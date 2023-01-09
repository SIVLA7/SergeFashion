<?php
  // error_reporting(E_ALL);
  // ini_set('display_errors', 1);

  $uri_path     = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_segments = explode('/', $uri_path);


  if(!empty($uri_segments[1])) {
    setcookie("language", $uri_segments[1], time() + (10 * 365 * 24 * 60 * 60));
    $current_language = $uri_segments[1];
  } else {
    $current_language = $_COOKIE['language'];
  }
  $end_of_url = array_values(array_slice($uri_segments, -1))[0];
  $style_url  = ($end_of_url == 'index.php' || $end_of_url == '') ? 1 : 2;

  include_once '../server/db.php';
  include_once '../server/seo.php';
  $seo = new SEO();
  $single_seo = $seo->getSEO($end_of_url, $uri_segments[1]);
?>
