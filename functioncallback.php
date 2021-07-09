<?php
    function sayHellow(string $name, callable $filter){
        $fullname = call_user_func($filter, $name);
        echo "Halo $fullname" . PHP_EOL;
    }

    sayHellow("Bagas", "strtoupper");
    sayHellow("Bagas", "strtolower");

    $goodbye = fn(string $name) => strtoupper($name);
    echo $goodbye("Bagas", "strtoupper");