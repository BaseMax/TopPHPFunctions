<?php
// is_numeric
$int = 1;
var_dump(is_numeric($int));

$int = 1.0;
var_dump(is_numeric($int));

$pi = 3.14;
var_dump(is_numeric($pi));

var_dump(is_numeric("hey"));

var_dump(is_numeric([]));

var_dump(is_numeric(new stdClass()));

var_dump(is_numeric(true));

var_dump(is_numeric(false));
