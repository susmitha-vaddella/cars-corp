<?php
header("Content-Type:application");
require "data.php";

if(!empty($_GET['name']))
{
$name=$_GET['name'];
$carmodel = get_carmodel($name);

if(empty($carmodel))
{
response(NULL);
}
else
{
response($carmodel);
}
}
else
{
response(NULL);
}

function response($data)
{
header("HTTP/1.1 ");

echo $data;
}

?>


