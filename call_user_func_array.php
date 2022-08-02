<?php
// call_user_func_array
function my_function($a, $b) {
    return $a + $b;
}
var_dump( call_user_func_array("my_function", [1, 2]) );
var_dump( call_user_func_array("my_function", [1, 2, 3, 4, 5]) );

"my_function"(1, 2);

$params = [1, 2];
"my_function"($params[0], $params[1]);
