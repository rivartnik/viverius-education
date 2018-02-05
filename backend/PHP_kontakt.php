<?php
   
include("../config.php");

$update_ime=$_POST['ime'];
$update_priimek=$_POST['priimek'];
$update_email=$_POST['email'];
$update_sporocilo=$_POST['sporocilo'];

 
$to      = 'info@viverius-education.com,rok.ivartnik@viverius.com,pantner.neli@viverius.com';
$subject = "Viverius-kontakt";
$headers = "From: {$update_email} <{$update_email}>\r\n";
$message = "Od: " . $update_ime . " " . "$update_priimek" . "\r\n";
$message .= "Email: " . $update_email . "\r\n";
$message .= "Sporocilo: " . $update_sporocilo . "\r\n";



if(@mail($to, $subject, $message, $headers)){
 header('Location: ../emailSuccesfull.php'); exit;
}else{
 header('Location: ../emailFailed.php'); exit;
}

?>