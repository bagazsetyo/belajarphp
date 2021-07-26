<?php

$name = "Eko";
$result = $name == "Eko" ? "Sukses" : throw new Exception('ups');

echo $result . PHP_EOL;
function validate(?string $name){
    $result = $name ?? throw new Exception('null');
    echo "Hello $result" . PHP_EOL;
}

validate("");
