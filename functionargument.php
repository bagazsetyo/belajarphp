<?php

    function sum(int $a, int $b)
    {
        echo $a + $b . PHP_EOL;
    }

    sum(10,14);

    function hellow(string $name = "Anonymouse", int $age = 0)
    {
        echo "Hallow $name , umur $age" . PHP_EOL;
    }

    hellow("bagas",14);
    hellow("asdasd", 2);

    function sumAll(array $val){
        $total = 0;
        foreach($val as $i){
            $total += $i;
        }
        echo "Total = " . implode(",", $val) . " = $total" . PHP_EOL;
    }

    sumAll([1,2,3,4,5]);

    
    function sumAll(...$val){
        $total = 0;
        foreach($val as $i){
            $total += $i;
        }
        echo "Total = " . implode(",", $val) . " = $total" . PHP_EOL;
    }

    sumAll(1,2,3,4,5);