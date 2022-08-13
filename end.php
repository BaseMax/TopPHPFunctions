<?php
// end
$numbers = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10
];

var_dump($numbers[0]);

var_dump(current($numbers));

var_dump(end($numbers));

var_dump(current($numbers));

// Cannot pass an array directly to end () function
// Error: var_dump(end([]));

$list = [];
var_dump(current($list));
var_dump(next($list));
var_dump(prev($list));
var_dump(end($list));
