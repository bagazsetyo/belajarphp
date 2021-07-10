<?php
    function factorial(int $value){
        $total = 1;
        for ($i=1; $i <= 10; $i++) { 
            $total *= $i;
        }

        return $total;
    }

    var_dump(factorial(10));

    function facRecursive(int $value):int{
        if ($value == 1) {
            return 1;
        }else{
            return $value *= facRecursive($value - 1);
        }
    }

    var_dump(facRecursive(10));