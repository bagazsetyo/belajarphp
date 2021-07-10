<?php

    function foo()
    {
        echo "foo" . PHP_EOL;
    }
    
    function bar()
    {
        echo "bar" . PHP_EOL;
    }

    $functionName = "foo";
    $functionName();

    $functionName = "bar";
    $functionName();

    function sayHellow(string $name, $filter)
    {
        $finalname = $filter($name);
        echo "Hellow $finalname" . PHP_EOL;
    }

    sayHellow("Bagas", "strtoupper");
    sayHellow("Bagas", "strtolower");

    
    function names(string $name, $filter)
    {
        $finalname = $filter($name);
        echo "Hellow $finalname" . PHP_EOL;
    }

    function filternames(string $name)
    {
        echo "sample $name ";
    }

    names("Bagas", "filternames");