<?php
/* Database credentials. */
define('DB_SERVER', "us-cdbr-east-03.cleardb.com");
define('DB_USERNAME', "b11c1dbedee6de");
define('DB_PASSWORD', "83571e6c");
define('DB_NAME', "heroku_5abecf7d5ddee5f");
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
