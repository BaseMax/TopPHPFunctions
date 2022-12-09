<?php
// htmlspecialchars

/*
    Convert special characters to HTML entities
    e.g. : 
        "<" convert to "&lt;"
        ">" convert to "&gt;"
        ...
*/
$str = "The word <b>text</b> is bold";
echo htmlspecialchars($str);
// HTML output will be "The word &lt;b&gt;text&lt;/&gt; is bold"

$str = "My name is 'Ali'";
echo htmlspecialchars($str);

$str = "What is decrement & increment ?";
echo htmlspecialchars($str);