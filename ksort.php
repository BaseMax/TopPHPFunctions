<?php
// ksort

$fruits = [
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
];
print_r($fruits);
ksort($fruits);
print_r($fruits);

ksort($fruits);
$fruits = array_reverse($fruits);
print_r($fruits);
