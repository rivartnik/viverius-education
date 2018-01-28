<?php
   
include("config.php");

$update_name=$_POST['name'];
$update_surname=$_POST['surname'];
$update_email=$_POST['email'];
$update_subject='Viverius-kontakt';
$update_message=$_POST['message'];

 
$to      = 'info@viverius-education.com,rok.ivartnik@viverius.com,pantner.neli@viverius.com';
$subject = $update_subject;
$headers = "From: {$update_email} <{$update_email}>\r\n";
$message = "Ime: " . $update_name . " " . $update_surname . "\r\n";
$message .= "Email: " . $update_email . "\r\n";
$message .= "Sporočilo: " . $update_message . "\r\n";



if(@mail($to, $subject, $message, $headers)){
 header('Location: emailSuccesfull.php'); exit;
}else{
 header('Location: emailFailed.php'); exit;
}

?>