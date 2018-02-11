<?php
   include("../config.php");
   session_start();
   
    error_reporting(E_ALL);
 // I don't know if you need to wrap the 1 inside of double quotes.
 ini_set("display_startup_errors",1);
 ini_set("display_errors",1);

$update_ime=$_POST['ime'];
$update_priimek=$_POST['priimek'];
$update_email=$_POST['email'];
$update_telefon=$_POST['telefon'];
$update_izobrazba=$_POST['izobrazba'];
$update_kraj=$_POST['kraj'];

$update_okp_S=$_POST['prijava_okp_S'];
$update_okp_G=$_POST['prijava_okp_G'];
$update_okp_K=$_POST['prijava_okp_K'];
$update_ops=$_POST['prijava_ops'];
$update_ods=$_POST['prijava_ods'];


$sql = "INSERT INTO registrirani_clani(IME,PRIIMEK,EMAIL,TELEFON,KRAJ_DELOVANJA, STATUS_CLANA, OKP_S, OKP_G, OKP_K, OPS, ODS)
VALUES ('$update_ime','$update_priimek','$update_email','$update_telefon','$update_kraj','$update_izobrazba', '$update_okp_S','$update_okp_G','$update_okp_K', '$update_ops','$update_ods' )";
mysqli_query($db, $sql);

$result1 = mysqli_query($db,"SELECT DATUM, HOUR FROM razpisani_tecaji WHERE ID_TECAJA = '$update_okp_S'");
while($row = mysqli_fetch_array($result1)){
$date1 = $row['DATUM'];
    $hour1 = $row['HOUR'];
}

$result2 = mysqli_query($db,"SELECT DATUM, HOUR FROM razpisani_tecaji WHERE ID_TECAJA = '$update_okp_G'");
while($row = mysqli_fetch_array($result2)){
$date2 = $row['DATUM'];
    $hour2 = $row['HOUR'];
}
$result3 = mysqli_query($db,"SELECT DATUM, HOUR FROM razpisani_tecaji WHERE ID_TECAJA = '$update_okp_K'");
while($row = mysqli_fetch_array($result3)){
$date3 = $row['DATUM'];
    $hour3 = $row['HOUR'];
}

$result4 = mysqli_query($db,"SELECT DATUM, HOUR FROM razpisani_tecaji WHERE ID_TECAJA = '$update_ops'");
while($row = mysqli_fetch_array($result4)){
$date4 = $row['DATUM'];
    $hour4 = $row['HOUR'];
}

$result5 = mysqli_query($db,"SELECT DATUM, HOUR FROM razpisani_tecaji WHERE ID_TECAJA = '$update_ods'");
while($row = mysqli_fetch_array($result5)){
$date5 = $row['DATUM'];
    $hour5 = $row['HOUR'];
}

//uredi še tole!! 31 kombinacij
/*<if((!empty($update_okp_S)) and (!empty($update_ops)) and (!empty($update_ods))) {
    $changableMessage  = "Online klinični primeri: " . $date1 ." " .$hour1. "\r\n" . "Online priprave na strokovni izpit: " . $date4 ." " .$hour4. "\r\n" . "Online delavnice za študente medicine: " . $date5 ." " .$hour5. "\r\n";
}

elseif((!empty($update_okp_S)) and (!empty($update_ops))) {
    $changableMessage  = "Online klinični primeri: " . $date1 ." " .$hour1. "\r\n" . "Online priprave na strokovni izpit: " . $date4 ." " .$hour4. "\r\n";
}
elseif((!empty($update_okp_S))  and (!empty($update_ods))) {
    $changableMessage  = "Online klinični primeri: " . $date1 ." " .$hour1. "\r\n" . "Online delavnice za študente medicine: " . $date5 ." " .$hour5. "\r\n";
}

elseif((!empty($update_ops)) and (!empty($update_ods))) {
    $changableMessage  = "Online priprave na strokovni izpit: " . $date4 ." " .$hour4. "\r\n" . "Online delavnice za študente medicine: " . $date5 ." " .$hour5. "\r\n";
}*/
if(!empty($update_okp_S)) {
    $changableMessage1  = "Online klinični primeri - splošne teme: " . $date1 ." " .$hour1. "\r\n";
}
else {
    $changableMessage1  = "";
}
if(!empty($update_okp_G)) {
    $changableMessage2  = "Online klinični primeri - gibala in kronična bolečina: " . $date2 ." " .$hour2. "\r\n";
}
else {
    $changableMessage2  = "";
}
if(!empty($update_okp_K)) {
    $changableMessage3  = "Online klinični primeri - kardiovaskularni sistem: " . $date3 ." " .$hour3. "\r\n";
}
else {
    $changableMessage3  = "";
}
if(!empty($update_ops)) {
    $changableMessage4  = "Online priprave na strokovni izpit: " . $date4 ." " .$hour4. "\r\n";
}
else {
    $changableMessage4  = "";
}
if(!empty($update_ods)) {
    $changableMessage5  = "Online delavnice za študente medicine: " . $date5 ." " .$hour5. "\r\n";
}
else {
    $changableMessage5  = "";
}

$to      = 'info@viverius-education.com,rok.ivartnik@viverius.com,pantner.neli@viverius.com';
$subject = 'Prijava na tečaj';
$headers = "From: {$update_email} <{$update_email}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<html><head>';
$message .= "<p>Prijavljam se na tečaj: </p><p>$changableMessage1</p><p>$changableMessage2</p><p>$changableMessage3</p><p>$changableMessage4</p><p>$changableMessage5</p>";
$message .= '</head><body>';
$message .= '<table table rules="all" style="border-color: #666;" cellpadding="5">';
$message .= "<tr style='background: #eee;'><th>IME</th><th>PRIIMEK</th><th>EMAIL</th><th>TELEFON</th><th>IZOBRAZBA</th><th>KRAJ DELOVANJA</th></tr>";
$message .= "<tr><td>$update_ime</td><td>$update_priimek</td><td>$update_email</td><td>$update_telefon</td><td>$update_izobrazba</td><td>$update_kraj</td></tr>";
$message .= "</table>";
$message .= "</body></html>";


if(mail($to, $subject, $message, $headers)){
  $to      =  $update_email;
  $subject = 'Potrdilo o prijavi na tečaj';
  $headers = "From: Viverius-education\r\n";
  $message  = "--------------------------------------------------- \r\n";
  $message  .= "Spoštovani, uspešno ste se prijavili na naslednje tečaj/e: \r\n";
  $message  .=  $changableMessage1 . "\r\n";
  $message  .=  $changableMessage2 . "\r\n";
  $message  .=  $changableMessage3 . "\r\n";
  $message  .=  $changableMessage4 . "\r\n";
  $message  .=  $changableMessage5 . "\r\n";
  $message  .= "--------------------------------------------------- \r\n";
  $message  .= "Podatki o udeležencu: \r\n";
  $message  .=  $update_ime . ", " . $update_priimek . ", " . $update_email . ", ". $update_telefon .", ". $update_izobrazba .", ". $update_kraj . "\r\n";
  $message  .= "--------------------------------------------------- \r\n";
  $message  .= "V kolikor so podatki napačni ali se izobraževanja ne boste mogli udeležiti nam prosim odgovorite na ta mail. \r\n";
  $message  .= "Hvala za zaupanje! \r\n";
  mail($to, $subject, $message, $headers);
 header('Location: emailSuccesfull.php'); exit;
}else{
 header('Location: emailFailed.php'); exit;
}

?>
