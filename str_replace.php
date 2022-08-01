<?php
var_dump(str_replace("hi", "hey", "hi there, hi you, hi everyone"));

var_dump(str_replace("hi", "hey", "hi there, hi you, hi everyone", $arr["count"]));
// var_dump($arr["count"]);
print_r($arr);

$str = "639346103468";
$str = str_replace("1", "2", $str);
$str = str_replace("3", "4", $str);
$str = str_replace("5", "6", $str);
$str = str_replace("7", "8", $str, $count);
// var_dump($count);
$str = str_replace("9", "0", $str);
var_dump($str);


$str = "639346103468";
$str = str_replace("1", "2", "1234512312123");
var_dump($str);

var_dump("123456789");
$a = str_replace([
    "1", "3", "5", "7", "9"
], [
    "2", "4", "6", "8", "0"
], "123456789");
var_dump($a);
