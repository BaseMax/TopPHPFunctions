<?php
// array_keys
$list = [
    "a",
    "b",
    "c"
];
print_r(array_keys($list));

$list = [
    1=>"a",
    5=>"b",
    10=>"c"
];
print_r(array_keys($list));

$list = [
    "a",
    5=>"b",
    "c"
];
print_r($list);
print_r(array_keys($list));

$list = [
    "a",
    "sallam"=>"b",
    "c"
];
print_r($list);
print_r(array_keys($list));

$list = [
    "a",
    3=>"xx",
    "sallam"=>"b",
    "c"
];
print_r($list);
print_r(array_keys($list));
