<?php
   include("../config.php");
   session_start();


if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}

$sql = "INSERT INTO razpisani_tecaji(DATUM,HOUR,STATUS,VRSTA,ST_ODPRTIH_MEST,OPIS_TECAJA)
VALUES
('$_POST[DATUM]','$_POST[HOUR]','$_POST[STATUS]','$_POST[VRSTA]','$_POST[ST_ODPRTIH_MEST]','$_POST[OPIS_TECAJA]')";


if ($db->query($sql) === TRUE) {
header('Location: https://www.viverius-education.com'); exit;
} else {
echo "Error: " . $sql . "<br>" . $db->error;
}$db->close();

?>
