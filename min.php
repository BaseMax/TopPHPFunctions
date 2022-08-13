<?php
// min

$numbers = [1, 2, 3, 4, 5];
var_dump(min($numbers));

// $numbers = [];
// var_dump(min($numbers));

var_dump(min([1, 2, 3, 4]));

var_dump(
    min(1, 2, 3, 4)
);

// Error:
// var_dump(min([]));

// Error:
// var_dump(min("hiii"));
