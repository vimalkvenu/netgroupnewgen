<?php

//error_reporting(-1);

$name = @trim(stripslashes($_POST['name'])); 
$email = @trim(stripslashes($_POST['email'])); 
$number = @trim(stripslashes($_POST['number']));
$email = @trim(stripslashes($_POST['email']));
$company = @trim(stripslashes($_POST['company']));
$subject = @trim(stripslashes($_POST['subject']));
$message = @trim(stripslashes($_POST['message']));

$message =  "Name: $name\r\n";
$message .= "Email: $email\r\n";
$message .= "Phone: $number\r\n";
$message .= "Email: $email\r\n";
$message .= "Company Name: $company\r\n";
$message .= "Subject: $subject\r\n";
$message .= "Message: $message\r\n";

$subject    = "Helpline - New Request"; 
$to   		= 'vimalkvenu@gmail.com';//replace with your email


mail($to, $subject, $message);

header('Location: http://www.redsolutions.in');
?>