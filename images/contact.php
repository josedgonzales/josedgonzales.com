<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = $_POST['josedgonzales.com@gmail.com'];
$subject = "Mail from Website"


$headers + "From: ".$name. " \r\n"
"CC:"

$txt = "You have recived an email from ".$name ."\r\nEmail: " .$email ."\r\n
    Message: ". $message;

if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}

header('Location:thankyou.html');




 ?>
