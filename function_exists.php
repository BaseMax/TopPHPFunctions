<?php
// function_exists
function a() {

}
var_dump(function_exists("a"));

var_dump(function_exists("xxxxxxx"));

var_dump(function_exists("echo"));
var_dump(function_exists("print"));
var_dump(function_exists("return"));
var_dump(function_exists("function_exists"));
