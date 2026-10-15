<?php

//error_reporting(-1);

$comp_name = @trim(stripslashes($_POST['comp_name'])); 
$cont_person = @trim(stripslashes($_POST['cont_person'])); 
//$title_name = @trim(stripslashes($_POST['title_name']));
$address = @trim(stripslashes($_POST['address']));
$email = @trim(stripslashes($_POST['email']));
//$phone_1 = @trim(stripslashes($_POST['phone_1']));
$phone_2 = @trim(stripslashes($_POST['phone_2']));
//$ownership = @trim(stripslashes($_POST['ownership']));
//$selected_country = @trim(stripslashes($_POST['selected_country']));
$trade_cat = @trim(stripslashes($_POST['trade_cat']));
//$target_age = @trim(stripslashes($_POST['target_age']));
//$space = @trim(stripslashes($_POST['space']));
$profile = @trim(stripslashes($_POST['profile']));

$message =  "Company Name: $comp_name\r\n";
$message .= "Contact Person: $cont_person\r\n";
//$message .= "Title: $title_name\r\n";
$message .= "Address: $address\r\n";
$message .= "Email: $email\r\n";
//$message .= "Area Code: $phone_1\r\n";
$message .= "Phone: $phone_2\r\n";
//$message .= "Ownership: $ownership\r\n";
//$message .= "Selected Country: $selected_country\r\n";
$message .= "Sevices Category: $trade_cat\r\n";
//$message .= "Target Age: $target_age\r\n";
//$message .= "Space Requirement: $space \r\n";
$message .= "Company Profile: $profile\r\n";

$subject    = "Free Quote - New Request"; 
$to   		= 'netgroupnewgen@gmail.com';//replace with your email

/*$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=UTF-8";
$headers .= "From: {$cont_person} <{$email}>";
$headers .= "Reply-To: <{$email}>";
$headers .= "Subject: {$subject}";
$headers .= "X-Mailer: PHP/".phpversion();*/

/*echo "<br><br>TO ADDRESS:<br>" . $to;
echo "<br><br>SUBJECT:<br>" . $subject;
echo "<br><br>MESSAGE:<br>" . $message;
echo "<br><br>HEADERS:<br>" . $headers;*/


mail($to, $subject, $message);

header('Location: http://www.netgroupnegen.in');
?>