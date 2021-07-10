<?php

    $name = "Bagas"; //global scope (diluar funciton)
    
    function sayHellow(){
        $name = "Bagas local"; //local sope (di dalam function)
        echo $name . PHP_EOL;
    }
    
    sayHellow();

    
    $name = "Bagas"; 
    
    function globalKeyword(){
        // global $name;
        // echo $name . PHP_EOL;
        echo $GLOBALS['name'];
    }
    
    globalKeyword();