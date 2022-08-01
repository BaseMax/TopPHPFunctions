<?php
var_dump(dirname("c:\\path\\to\\file.txt"));
var_dump(dirname("file.txt"));
var_dump(dirname("../file.txt"));

$files = glob("c:\\xampp\\htdocs\\TopPHPFunctions\\*.php");
print_r($files);
foreach ($files as $file) {
    print dirname($file) . "\n";
}

var_dump("c:\\xampp\\htdocs\\TopPHPFunctions\\aaa.php");
var_dump(dirname("c:\\xampp\\htdocs\\TopPHPFunctions\\aaa.php"));

