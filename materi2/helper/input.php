<?php
    function input(string $info):string 
    {
        echo "$info : ";
        $result = fgets(STDIN);
        return $result . PHP_EOL;
    }