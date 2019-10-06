<?php


$obj = new stdClass();
$obj->name = 'wang';

$a = get_object_vars($obj);
var_dump($a);

echo "<pre>";
print_r($obj);
echo "</pre>";



class Name
{

}

$a = new Name();
echo "<pre>";
print_r($a);
echo "</pre>";


$arr = [1,2,3];

var_dump((object)$arr);

