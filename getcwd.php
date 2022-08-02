<?php
// getcwd
$current_path = getcwd();
var_dump($current_path);

var_dump(
    realpath($current_path . "/../")
);
var_dump(
    realpath($current_path . "/../../")
);
