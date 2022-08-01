<?php
// explode
$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi nisi euismod nisi. Donec euismod, nisl eget consectetur consectetur, nisi nisl aliquet nisi, euismod euismod nisi";
$list = explode(" ", $str);
var_dump($list);

$str = implode(" ", $list);
var_dump($str);
