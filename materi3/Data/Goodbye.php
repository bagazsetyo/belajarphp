<?php

namespace Data;

trait Goodbye{
    public string $name;
    function goodbye(?string $name){
        if (is_null($name)) {
            echo "goodbye" . PHP_EOL;
        }else{
            echo "goodbye $name" . PHP_EOL;
        }
    }
}

trait Hello{
    public string $name;
    function hello(?string $name){
        if (is_null($name)) {
            echo "hello" . PHP_EOL;
        }else{
            echo "hello $name" . PHP_EOL;
        }
    }
}

class Person{
    use Goodbye, Hello;
}