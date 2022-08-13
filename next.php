<?php
// next
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

var_dump(next($numbers));

var_dump(current($numbers));

var_dump(prev($numbers));

var_dump(current($numbers));
