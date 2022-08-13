<?php
// gettype

var_dump(gettype("hey"));
var_dump(gettype(110));
var_dump(gettype(3.14));
var_dump(gettype(true));
var_dump(gettype(null));

$age = 25;
if (gettype($age) === "integer") {
    print "yes";
} else {
    print "no";
}
