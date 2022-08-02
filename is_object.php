<?php
$obj = new stdClass();
$obj->{"123"} = "000";
$obj->a = "a";
$obj->b = "b";
$obj->c = "c";
$obj->d = "d";

print_r($obj);

var_dump(is_object($obj));
var_dump(is_object($obj->a));
var_dump(is_object([]));

$list = [ 1, 2, 3, 4, 5 ];
$list[6] = 100;
var_dump(is_object($list));

// A quick look to Class
class Car {

}
$peraid = new Car();
$pershia = new Car();
var_dump(is_object($peraid));
var_dump(is_object($pershia));
