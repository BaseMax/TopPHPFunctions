<?php
// ini_get
// c:\\xampp\\php\\php.ini
var_dump( ini_get("short_open_tag") );
ini_set("short_open_tag", "On");
var_dump( ini_get("short_open_tag") );
echo "\n";

// <?
// ?>
