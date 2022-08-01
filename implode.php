<?php
var_dump(
    implode("\n", [
        "a",
        "b",
        "c"
    ])
);

$str = "";
$list = ["a", "b", "c"];
foreach($list as $item) {
    $str = $str . $item;
    if ($item !== $list[count($list)-1]) {
        $str .= "\n";
    }
}
var_dump($str);
