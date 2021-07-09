<?php
    $name = "Bagas";

    $otherName = &$name;
    // $otherName = "Setyo";

    echo "name = $otherName" . PHP_EOL;

    // function increment($value){ // data tetap 1
    function increment(&$value){ //with pass by reference
        $value++;
    }

    $counter = 1;
    increment($counter);
    echo $counter . PHP_EOL;


    function &getValue(){
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    $a = 400;

    $b = &getValue();
    echo $b . PHP_EOL;