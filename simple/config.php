<?php
/* Database credentials. */
define('DB_SERVER', "us-cdbr-east-03.cleardb.com");
define('DB_USERNAME', 'bb747576754d65');
define('DB_PASSWORD', '61611e51');
define('DB_NAME', 'heroku_149c14ecd38c525');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
