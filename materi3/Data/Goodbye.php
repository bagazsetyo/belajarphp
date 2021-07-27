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

trait CanRun{
    public abstract function run(): void;
}

class ParentPeron{
    public function goodbye(?string $name)
    {
        echo "Goodbe in Person" . PHP_EOL;   
    }

    public function hello(?string $name)
    {
        echo "Hello in Person" . PHP_EOL;
    }
    
}

trait All{
    use Goodbye, Hello, CanRun {
        // hello as private;
        // goodbye as private;
    }
}

class Person extends ParentPeron{
    use All;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

}
