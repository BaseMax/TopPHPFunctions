<?php
// sprintf
// %d
// %s
// %f
$str = sprintf("%s %s", "Hello", "World");
var_dump($str);

$str = sprintf("%s<---->%s", "Hello", "World");
var_dump($str);

$str = sprintf("hi, there, it's me? HOW ARE YOU?\n%s (%d)", "Hello", 100);
var_dump($str);

$str = sprintf("hi, there, it's me? HOW ARE YOU?");
var_dump($str);

$str = "Hello" . " " . "World";
var_dump($str);

$age = 100;
$str = "Hello $age";
var_dump($str);

function testme() {
    return "MAX";
}

$age = 100;
$str = "Hello $age" . testme();
var_dump($str);

$age = 100;
$str = "Hello {$age} testme()";
var_dump($str);

$list = [
    "ali",
    "reza",
    "hamid"
];
$str = "Hello {$list[0]} {$list[1]} {$list[2]}";
var_dump($str);

// $age = 10;
// Error: $str = "$agehi";
// var_dump($str);

$age = 10;
$str = "$age hi";
var_dump($str);

$age = 10;
$str = "$age" . " hi";
var_dump($str);

$age = 10;
$str = $age . " hi";
var_dump($str);

$age = 10;
$str = "{$age}hi";
var_dump($str);


var_dump(sprintf("%d", "100"));
var_dump(sprintf("%f", 3.14));
var_dump(sprintf("%g", 3.14));
var_dump(sprintf("%.3f", 3.14));
var_dump(sprintf("%.3f", 10));

// string	s
// int	d, u, c, o, x, X, b
// float	e, E, f, F, g, G, h, H
