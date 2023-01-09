<?php

require 'PHPMailer/PHPMailerAutoload.php';

//Options BEGIN
$mail = new PHPMailer;  
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587  
$mail->IsHTML(true);
$mail->Username = "sendingsivenkov@gmail.com";
$mail->Password = "1Jfdks8Hns";
$mail->setFrom('sendingsivenkov@gmail.com', 'Заявка с сайта serge.sivenkov.by');
$mail->addAddress('sivenkovvlad@gmail.com', 'Заявка с сайта serge.sivenkov.by');
$mail->addReplyTo('sivenkovvlad@gmail.com', 'Заявка с сайта serge.sivenkov.by');
$mail->isHTML(true); 
$mail->Subject = 'Заявка с сайта serge.sivenkov.by';
//Options END


//User data BEGIN
$name    		 = $_POST["name"];
$city 	 		 = $_POST["city"];
$phone   		 = $_POST["phone"];
$email   		 = $_POST["email"];
$square   	 = $_POST["square"];
$type_room   = $_POST["type-room"];
//User data END////


//Set user data BEGIN
if  ( isset($name) && $name !== '' )       		 $mail->Body  = 'Имя: ' . $name . "<br/>";
if  ( isset($city) && $city !== '' ) 			 		 $mail->Body .= 'Город: ' . $city . "<br/>";
if  ( isset($phone) && $phone !== '' )     		 $mail->Body .= 'Телефон: ' . $phone . "<br/>";
if  ( isset($email) && $email !== '' )     		 $mail->Body .= 'Email: ' . $email . "<br/>";
if  ( isset($square) && $square !== '' ) 			 $mail->Body .= 'Торговая площадка, м2: ' . $square . "<br/>";
if  ( isset($type_room) && $type_room !== '' ) $mail->Body .= 'Торговая площадка, м2: ' . $type_room . "<br/>";
//Set user data END


//Send BEGIN
$sendMail = $mail->send();
if (!$sendMail) echo 'Mailer Error: ' . $mail->ErrorInfo;
else echo 'Mailer send';
//Send END
?>
