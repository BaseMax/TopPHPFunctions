<?php
// array_unique
$list = [
    "a",
    "b",
    "c",
    "a",
    "a",
    "a"
];
print_r($list);

$list = array_unique($list);
print_r($list);

$list = [
    5=>"a",
    "b",
    "c",
    56=>"a",
    51=>"a",
    50=>"a"
];
print_r($list);

$list = array_unique($list);
print_r($list);
