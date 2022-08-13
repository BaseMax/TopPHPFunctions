<?php
// ucfirst

var_dump(ucfirst("hello"));

$str = "hello";
var_dump(ucfirst($str));

var_dump(ucfirst("hello how are you?"));

var_dump(ucfirst("hello how are you. yoooo!"));

$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!
var_dump($foo);

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);             // HELLO WORLD!
var_dump($bar);
$bar = ucfirst(strtolower($bar)); // Hello world!
var_dump($bar);

