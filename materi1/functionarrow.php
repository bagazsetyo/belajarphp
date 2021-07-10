<?php
    $firstname = "Bagas";
    $lastname = "Setyo";
    
    $anonym = function() use ($firstname, $lastname){
        echo "Hellow $firstname $lastname" . PHP_EOL;
    };

    $anonym();

    $arrow = fn():string => "Hellow $firstname $lastname" . PHP_EOL;

    echo $arrow();