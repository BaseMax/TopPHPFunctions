<?php
// key
$array = [
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple'
];

var_dump(key($array));
var_dump(next($array));
var_dump(key($array));
var_dump(next($array));
var_dump(key($array));
var_dump(next($array));
var_dump(key($array));
var_dump(next($array));
var_dump(key($array));

// what about if we go to end of a list
var_dump(next($array));
var_dump(key($array));

$list = [
    100,
    200,
    300
];
var_dump(key($list));
