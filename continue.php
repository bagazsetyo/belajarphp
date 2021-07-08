<?php
    $a = 1;

    for ($i=0; $i <= 100; $i++) { 
        if ($i % 2 == 0) {
            continue;
        }
         
        echo "Hello world ke-".$i . PHP_EOL;
    }