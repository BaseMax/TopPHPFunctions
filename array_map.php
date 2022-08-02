<?php
// array_map
$names = [
    "reza",
    "hamid",
    "ali",
    "farzad",
    "reza",
    "abbas",
    "amirreza",
    "far"
];

array_map(function($name) {
    echo strtoupper($name) . "\n";
}, $names);

print "==============\n";

$my_function = function($name) {
    echo strtoupper($name) . "\n";
};
array_map($my_function, $names);

print "==============\n";

$names = array_map(function($name) {
    return strtoupper($name);
}, $names);

print "==============\n";

$names = [
    "reza",
    "hamid",
    "ali",
    "farzad",
    "reza",
    "abbas",
    "amirreza",
    "far"
];
$names = array_map("strtoupper", $names);
print_r($names);

exit();

print "==============\n";

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
$multiply = function($number) {
    return $number * 10;
};
$a = array_map($multiply, $numbers);
print_r($a);

$a = [];
foreach ($numbers as $i => $number) {
    $a[$i] = $multiply($number);
}
