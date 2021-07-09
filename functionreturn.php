<?php

    function sum(int $a, int $b)
    {
        return $a + $b;
    }

    $total = sum(10,14);
    var_dump($total);

    
    function nilai($a)
    {
        if ($a >= 90) {
            return 'A';
        }elseif ($a >= 80) {
            return 'B';
        }else{
            return 'E';
        }
    }

    
    $total = nilai(10);
    var_dump($total);

    
    
    function type($a) :string
    {
        if ($a >= 90) {
            return 1;
        }elseif ($a >= 80) {
            return 2;
        }else{
            return 3;
        }
    }

    
    $total = type(10);
    var_dump($total);