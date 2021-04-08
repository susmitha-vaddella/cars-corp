<?php
/* Database credentials. */
define('DB_SERVER', "us-cdbr-east-03.cleardb.com");
define('DB_USERNAME', "bf4cc27f689662");
define('DB_PASSWORD', "66a9abee");
define('DB_NAME', "heroku_5c28ff99d0b7325");
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
