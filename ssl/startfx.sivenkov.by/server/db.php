<?php
  if(!isset($dbh) || $dbh == NULL) {
    try {
      $dbh = new PDO("mysql:host=localhost;dbname=a3ddcity_startfxcom;charset=utf8", "a3ddcity_startus", "FNQfE9N?QglG", array(PDO::ATTR_PERSISTENT => true));
    }
    catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die('<span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>');
    }
  }
?>
