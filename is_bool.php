<?php
// is_bool
$var = true;
var_dump(is_bool($var));

$var = false;
var_dump(is_bool($var));

var_dump(is_bool([]));
var_dump(is_bool("fff"));

