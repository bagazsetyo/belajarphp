<?php

    require_once "Helper/Helper.php";
    
    use Helper\MathHelper;

    echo MathHelper::$name . PHP_EOL;

    MathHelper::$name = "Eko";
    echo MathHelper::$name . PHP_EOL;

    $result = MathHelper::sum(10,10,10,10) . PHP_EOL;
    echo $result . PHP_EOL;