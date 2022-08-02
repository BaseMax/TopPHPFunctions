<?php
// function
function my_function() {
    echo "Hello World!";
}
my_function();

// call back function
$second = function() {
    echo "Hello World!";
};
$second();

$sum = function($a, $b) {
    return $a + $b;
};
echo $sum(1, 2);

echo "===================\n";

function my($number1, $number2, $fn) {
    $result = $fn($number1, $number2);
    $result = $result * 10;
    echo $result . "\n";
}

my(1, 2, function($a, $b) {
    return $a + $b;
});

my(1, 2, function($a, $b) {
    return $a * $b;
});

my(1, 2, function($a, $b) {
    return $a - $b;
});

my(1, 2, function($a, $b) {

});

// Run it!
// function() {
//     print "Hey!\n";
// }();

(function() {
    print "Hey!\n";
})();

(function($name) {
    print "Hey $name!\n";
})("Reza");

$sayHey = function($name) {
    print "Hey $name!\n";
};
$sayHey("Rey");
unset($sayHey);
