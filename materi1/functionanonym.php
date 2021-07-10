<?php

    $name = function($name)
    {
        echo "Hellow $name" . PHP_EOL;
    };
    
    $name("Bagas");
    $name("Yaya");

    function sayGoodbye(string $name, $fillter)
    {
        $fullname = $fillter($name);
        echo "Hellow $fullname " . PHP_EOL;
    };

    sayGoodbye("bagas", function(string $name){
        echo strtoupper($name);
    });
    
    $fillter = function($name){
        echo strtoupper($name);
    };

    sayGoodbye("bagas", $fillter);

    $firstname = "Bagas";
    $lastname = "Setyo";
    
    $ss = function() use ($firstname, $lastname){
        echo "Hellow $firstname $lastname";
    };

    $ss();

    sayGoodbye("bagas", $fillter);