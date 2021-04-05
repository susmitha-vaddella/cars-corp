<?php

function get_carmodel($name)
{
$carname = [
"bmw"=>1,
"audi"=>2,
"benz"=>3
];

foreach($carname as $carname=>$carmodel)
{
if($carname==$name)
{
return $carmodel;
break;
}
}
}

?>