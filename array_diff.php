<?php
// array_diff

$array1 = [
    "red",
    "blue",
    "red",
    "hi",
    5,
    1, 2, 3
];
$array2 = [
    "yellow",
    2, 3, 1,
    "red",
    "hi",
    6-1
];
$result = array_diff($array1, $array2);

print_r($array1);
print_r($array2);
print_r($result);

// Error:
// $source = [1, 2, 3, 4];
// $filter = [3, 4, [5], 6];
// $result = array_diff($source, $filter);
// print_r($source);
// print_r($filter);
// print_r($result);
