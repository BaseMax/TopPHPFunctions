<?php
// is_dir
if (is_dir("/tmp")) {
    echo "/tmp is a directory\n";
} else {
    echo "/tmp is not a directory\n";
}

if (is_dir("/etc/passwd")) {
    echo "/etc/passwd is a directory\n";
} else {
    echo "/etc/passwd is not a directory\n";
}

if (is_dir("../")) {
    echo "../ is a directory\n";
} else {
    echo "../ is not a directory\n";
}

if (is_dir("c:\\xampp\htdocs\\")) {
    echo "\"c:\\xampp\\htdocs\" is a directory\n";
} else {
    echo "\"c:\\xampp\\htdocs\" is not a directory\n";
}

if (is_dir("c:\\xampp\htdocs\\TopPHPFunctions\is_dir.php")) {
    echo "\"c:\\xampp\\htdocs\\TopPHPFunctions\\is_dir.php\" is a directory\n";
} else {
    echo "\"c:\\xampp\\htdocs\\TopPHPFunctions\\is_dir.php\" is not a directory\n";
}

