<?php
// strrpos
$str = "Hello World o o o o  o";
$a = strrpos($str, "o");
var_dump(strlen($str));
var_dump($a);

// offset
$foo = "0123456789a123456789b123456789c";

// Looking for '0' from the 0th byte (from the beginning)
var_dump(strrpos($foo, '0', 0));
// int(0)

// Looking for '0' from the 1st byte (after byte "0")
var_dump(strrpos($foo, '0', 1));
// bool(false)

// Looking for '7' from the 21th byte (after byte 20)
var_dump(strrpos($foo, '7', 20));
// int(27)
