<?php
  class System {
    public function set_language() {
      if(!empty($_GET['language'])) {
        $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'ru';
      } else {
        $_COOKIE['language'] = 'en';
      }
      setcookie('language', $_COOKIE['language']);
      return $_COOKIE['language'];
    }
    public function sendEmail($lang, $data) {
      parse_str($data, $obj);
      $email['name']  = $obj['name'];
      $email['email'] = $obj['#38;email'];
      $email['text']  = $obj['#38;message'];

      require 'class.phpmailer.php';
      require 'class.smtp.php';
      require 'PHPMailerAutoload.php';


      $mail = new PHPMailer(true);
      //$mail->SMTPDebug = 3;

      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'support@startfx.com';
      $mail->Password   = 'i9fLOWvbW6';
      $mail->SMTPSecure = 'tls';
      $mail->Port       = 587;

      try {
        $mail->AddAddress($email['email'], $email['name']);
        $mail->SetFrom($email['email'], $email['name']);
        $mail->AddReplyTo('support@startfx.com', 'First Last');
        $mail->Subject = 'Support - StartFX';
        $mail->Body = $email['text'];
        $mail->Send();
        echo 'success';
      } catch (phpmailerException $e) {
        echo 'false'; //Pretty error messages from PHPMailer
      } catch (Exception $e) {
        echo 'false'; //Boring error messages from anything else!
      }
    }
  }
?>
