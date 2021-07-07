<?php
    $name = "Bagas Setyo";

    echo "Name : " . $name . PHP_EOL;
    echo "Age : " . 100 . PHP_EOL; 

    $value = (string)100;
    var_dump($value);
    
    $value = (int)"100";
    var_dump($value);
    
    $value = (float)"10.1";
    var_dump($value);

    var_dump($name[0]) . PHP_EOL;
    var_dump($name[1]) . PHP_EOL;
    var_dump($name[3]) . PHP_EOL;

    echo "Hell $name Selemat Belajar" . PHP_EOL;


    $var = "var";
    echo "this is {$var}s" . PHP_EOL;