<?php
// call_user_func
function my_function() {
    echo "Hello World!";
}
call_user_func("my_function");

//////////////////
function my_function2() {
    echo "22222";
}
function my_function4() {
    echo "44444";
}
function my_function6() {
    echo "66666";
}

for ($i=2; $i<=6; $i+=2) {
    call_user_func("my_function$i");
}


$fn_name = "my_function4";
$fn_name();

$i = 6;
$fn_name = "my_function$i";
$fn_name();

my_function4();

// Error: my_function$i();

for ($i=1; $i<=100; $i++) {
    ${"age$i"} = $i * 100;
}
print $age1."\n";
print $age2."\n";
print $age3."\n";

// ${"my_function2"}();
print "\n----------------\n";
"my_function2"();
print "\n";
("my_function2")();
