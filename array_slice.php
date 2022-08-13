<?php
// array_slice

$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
var_dump($output);
$output = array_slice($input, -2, 1);  // returns "d"
var_dump($output);
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
var_dump($output);


// practice
$input = array("a", "b", "c", "d", "e");
$list = array_merge(
    array_slice($input, 0, 3),
    ["oooooo"],
    array_slice($input, 3)
);
print_r($list);
