<?php
// in_array
$list = [
    "a",
    "b",
    "c"
];
var_dump(in_array("a", $list));
var_dump(in_array("x", $list));
// Error: var_dump(in_array($list, "x"));

$res = false;
$looking_for = "x";
foreach ($list as $item) {
    if ($item === $looking_for) $res = true;
}
var_dump($res);
