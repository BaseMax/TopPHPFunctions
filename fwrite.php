<?php
// fwrite
$f = fopen("file.txt", "w"); // write
fwrite($f, "Hello World");
fclose($f);

file_put_contents("file.txt", "Hello, World!");
file_get_contents("file.txt");



file_put_contents("file.txt", "Hi!", FILE_APPEND);

file_put_contents("music.mp3", file_get_contents("https://kharatha.com/Heyf2.mp3"));
