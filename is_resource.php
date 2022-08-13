<?php
// is_resource

$handle = fopen("php://stdout", "w");
if (is_resource($handle)) {
    echo '$handle is a resource';
}

if (is_resource(5)) {
    echo '5 is a resource';
}

if (is_resource("sallam")) {
    echo 'sallam is a resource';
}

$handle = fopen("../is_resource.php", "w");
if (is_resource($handle)) {
    echo '$handle is a resource';
}
