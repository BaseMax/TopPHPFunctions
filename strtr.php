<?php
// strtr
$str = "Hello World!";
print strlen($str) . "\n";


// string(12) "****o Wor*d!"
// string(12) "*ello World!"
// string(12) "Hello World!"
// string(12) "***** W*r*d!"
// string(12) "Hello World!"
// string(12) "Hello World!"
var_dump( strtr($str, "Hello", "****") );
var_dump( strtr($str, "Hello", "*") );
var_dump( strtr($str, "Hello", "") );
var_dump( strtr($str, "Hello", "*********") );
var_dump( strtr($str, "Hello", "Hello") );
var_dump( strtr($str, "Hello", "Hello World!") );


// string(12) "Hello Worl*!"
// string(12) "Hello Worl*!"
var_dump( strtr($str, "abcde", "****") );
var_dump( strtr($str, "abcd", "*****") );


// string(12) "****o Wor*d!"
var_dump( strtr($str, "Hello", "**e*") );
// string(12) "**eeo Wored!"
var_dump( strtr($str, "Hello", "***e") );

// $action = [
//     "a" => "!",
//     "b" => "@",
//     "c" => "#"
// ];
// var_dump( strtr($str, $action) );

$pairs = [
    "h" => "-",
    "hello" => "hi",
    "hi" => "hello"
];
// hello all, I said hi
// hello all, I said hi
// hello all, I said hi -
// hello all, I said hi - -o
echo strtr("hi all, I said hello h ho", $pairs);
// The two modes of behavior are substantially different.
// With three arguments, strtr() will replace bytes; with two,
// it may replace longer substrings.

print "\n";

$pairs = [
    "h" => "-",
    "hilow" => "SSSSS",
    "hi" => "hello"
];
echo strtr("hi all, I said hello h ho", $pairs);
// hello all, I said -ello - -o
print "\n";

echo strtr("hi all, I said hilow hiloX h ho", $pairs);
// hello all, I said SSSSS - -o

print "\n===================\n";

$dict = [
    "hello" => "سلام",
    "bye" => "خداحافظ",
    "how are you" => "چطوری؟",
    "hey" => "هوی!"
];
echo strtr("hello bye how are you hey", $dict);
// سلام خداحافظ چطوری؟ هوی!
