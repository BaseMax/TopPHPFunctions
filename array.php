<?php
// array

$list = array(1, 2, 3, 4);
$list = [1, 2, 3, 4];

print_r($list);

array_push($list, 50);
$list[] = 600;

print_r($list);

// remove last element
array_pop($list);
print_r($list);

// remove first element
array_shift($list);
print_r($list);

$res = array_pop($list);
var_dump($res);

$res = array_shift($list);
var_dump($res);

print_r($list);
