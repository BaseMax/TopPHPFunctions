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

function sum(...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
print sum(1, 2, 3, 4)."\n";

function sum2($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
print sum2([1, 2, 3, 4])."\n";
// print sum([1, 2, 3, 4])."\n";


function func($a, $b, $c, int ...$numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += ($number + $a - $b) * $c;
    }
    return $sum;
}
var_dump(func(1, 2, 3, 4, 5, 6, 7, 8, 9, 10));
// var_dump(func(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "hi"));
