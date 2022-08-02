<?php
// array_values
$a = array("a" => "red", "b" => "green");
$b = array_values($a);
print_r($b);

$a = [
    0 => "a",
    10 => "b",
    20 => "c",
    30 => "d",
    40 => "e",
    50 => "f",
];
$b = array_values($a);
print_r($b);

$names = [
    "reza",
    "hamid",
    "ali",
    "farzad",
    "reza",
    "abbas",
    "amirreza",
    "far"
];
unset($names[0]);
unset($names[5]);
print_r($names);
$names = array_values($names);
print_r($names);


