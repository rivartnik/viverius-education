<?php
 
/*
 * 
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
      
require_once('config.php');         

// Database connection                                   
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 

// Get all parameter provided by the javascript
$date = $mysqli->real_escape_string(strip_tags($_POST['DATUM']));
$hour = $mysqli->real_escape_string(strip_tags($_POST['HOUR']));
$open_spots = $mysqli->real_escape_string(strip_tags($_POST['ST_ODPRTIH_MEST']));
$status = $mysqli->real_escape_string(strip_tags($_POST['STATUS']));
$vrsta = $mysqli->real_escape_string(strip_tags($_POST['VRSTA']));
$opis = $mysqli->real_escape_string(strip_tags($_POST['OPIS_TECAJA']));

$tablename = $mysqli->real_escape_string(strip_tags($_POST['tablename']));

//$_POST[DATUM]','$_POST[HOUR]','$_POST[STATUS]','$_POST[VRSTA]','$_POST[ST_ODPRTIH_MEST]','$_POST[OPIS_TECAJA]')";

$return=false;
if ( $stmt = $mysqli->prepare("INSERT INTO ".$tablename."  (DATUM,HOUR,STATUS,VRSTA,ST_ODPRTIH_MEST,OPIS_TECAJA) VALUES (  ?, ?, ?, ?, ?, ?)")) {

	$stmt->bind_param("ssssss", $date, $hour, $status, $vrsta, $open_spots, $opis);
    $return = $stmt->execute();
	$stmt->close();
}             
$mysqli->close();        

echo $return ? "ok" : "error";

      

