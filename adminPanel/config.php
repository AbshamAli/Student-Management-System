<?php

session_start();
/* MySQL server credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,'admin');

// Check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?>
