<?php
// microtime

// $time_start = microtime(true);
// ///////////////////////////////
// $i = 1;
// while($i <= 100000) {
//     $i++;
// }
// ///////////////////////////////
// $time_end = microtime(true);
// $time = $time_end - $time_start;

// print "Time start: $time_start\n";
// print "Time end: $time_end\n";
// print "Time taken: $time\n";

// $time_start = microtime(true);
// ///////////////////////////////
// for($i= 1; $i <= 100000; $i++) {
// }
// ///////////////////////////////
// $time_end = microtime(true);
// $time = $time_end - $time_start;

// print "Time start: $time_start\n";
// print "Time end: $time_end\n";
// print "Time taken: $time\n";

function test_me($function) {
    $time_start = microtime(true);
    ///////////////////////////////
    $function();
    ///////////////////////////////
    $time_end = microtime(true);
    $time = $time_end - $time_start;
    ///////////////////////////////
    print "Time start: $time_start\n";
    print "Time end: $time_end\n";
    print "Time taken: $time\n";
}

test_me(function() {
    $i = 1;
    while($i <= 100000) {
        $i++;
    }
});

test_me(function() {
    print "Hey";
});

test_me(function() {
    print str_repeat("Hey", 100000);
});
