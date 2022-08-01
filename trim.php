<?php
// trim
$string = "  abcdefghijklmnopqrstuvwxyz  ";
var_dump(trim($string));

$list = [
    "reza",
    "ali",
    "hamid"
];
$seperate = "\n";
$str = "";
foreach($list as $item) {
    $str = $str . $item . $seperate;
}
var_dump($str);
$str = rtrim($str, $seperate);
var_dump($str);

// ltrim
$string = "  abcdefghijklmnopqrstuvwxyz  ";
var_dump(ltrim($string));

// rtrim
var_dump(rtrim($string));
