<?php
// array_merge
$list1 = [
    "a",
    "b",
    "c"
];
$list2 = [
    "d",
    "e",
    "f"
];
// Nothing: array_merge($list1, $list2);
$list3 = array_merge($list1, $list2);
print_r($list3);

$list4 = [];
foreach ($list1 as $item) {
    $list4[] = $item;
}
foreach ($list2 as $item) {
    $list4[] = $item;
}
print_r($list4);
