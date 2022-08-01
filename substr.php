<?php
// substr
$string = "abcdefghijklmnopqrstuvwxyz";
var_dump(substr($string, 0, 3));
var_dump(substr($string, 3, 3));
var_dump(substr($string, -3, 3));
var_dump(substr($string, -3, -1));
var_dump(substr($string, -3, -2));
var_dump(substr($string, -3, -3));
var_dump(substr($string, -3, -5));
var_dump(substr($string, -3, -50000));

var_dump(substr(null, -3, -50000));
