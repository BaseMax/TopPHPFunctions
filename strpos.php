<?php
// strpos
$str = "Hello World o o o o  o";
var_dump(strpos($str, "o"));
var_dump(strpos($str, "o", 4));
var_dump(strpos($str, "o", 4+1));

$looking_for = "o";
$offset = 0;
while (true) {
    $offset = strpos($str, $looking_for, $offset);
    if ($offset === false) break;
    $offset++;
    var_dump($offset);
}

$str = "Hello World o o o o  o";
$pos = strpos($str, "o");
var_dump($pos);
$str = substr($str, $pos+1);
var_dump($str);
$pos = strpos($str, "o");
var_dump($pos);
