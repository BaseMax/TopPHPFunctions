<?php
var_dump( file_exists('..\..\..\hi.txt') );
var_dump( file_exists("file_exists.php") );
var_dump( file_exists("test.php") );
var_dump( file_exists("dir\\hi.txt") );
var_dump( file_exists("..\\dir\\hi.txt") );
var_dump( file_exists("..\\..\\..\\dir\\hi.txt") );
var_dump( file_exists("c:\\dir\\hi.txt") );
var_dump( file_exists("e:\\hi.txt") );

// /home/user/file_exists.php
// c:\user\hi.txt

var_dump("a\n");
var_dump("a\\n");

var_dump("a\t");
var_dump("a\\t");
var_dump("a\\b");
var_dump("a\b");

var_dump("\'");
var_dump('\n');
var_dump('\t');
// var_dump("a\\" . "t");

$age = 20;
print $age . "," . $age . "\n";
print "$age";
print '$age';

$age = 100;
var_dump($age);
var_dump("$age");

// Error: var_dump('\');
var_dump('\\');
var_dump('\\\\');

var_dump('c:\test\file.txt');
// Error: var_dump('c:\');
var_dump('c:\\');

var_dump(file_exists(null));
