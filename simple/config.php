<?php
/* Database credentials. */
define('DB_SERVER', 'us-cdbr-east-03.cleardb.com');
define('DB_USERNAME', 'b78d2002c29757');
define('DB_PASSWORD', 'e72f0758');
define('DB_NAME', 'heroku_fb60028f0ab10e6')
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
