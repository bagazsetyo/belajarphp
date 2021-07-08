<?php
    $a = 1;
    while (true) {
        echo "While Loop ke-" . $a ++ . PHP_EOL;
        if($a > 10){
            break;
        }
    }

    for ($i=0; $i <= 100; $i++) { 
        if ($i % 2 == 0) {
            continue;
        }
         
        echo "Hello world";
    }