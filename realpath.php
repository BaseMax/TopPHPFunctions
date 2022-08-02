<?php
// realpath
$path = "";
var_dump(realpath($path));

$path = ".";
var_dump(realpath($path));

$path = "./";
var_dump(realpath($path));

$path = "../";
var_dump(realpath($path));

$path = "../../";
var_dump(realpath($path));

$path = "../../../";
var_dump(realpath($path));

$path = "../../../xampp/";
var_dump(realpath($path));

$path = "../../../xampp/htdocs/";
var_dump(realpath($path));
