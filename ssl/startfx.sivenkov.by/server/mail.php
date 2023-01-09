<?php
  if(isset($_POST['action'])) {
    include_once 'system.php';
    $system = new System();
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    switch($action) {
      case 'sendEmail':
        $lang = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_SPECIAL_CHARS);
        $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_SPECIAL_CHARS);
        //var_dump($lang, $data);die();
        $system->sendEmail($lang, $data);
        break;
    }
  }
?>
