<?php

    namespace ProgrammerZamanNow\Test;

    use Exception;

    class Person{

        public function __construct(public string $name)
        {
            
        }

        public function sayHello(?string $name)
        {
            if($name == null){
                throw new Exception('name is null');
            }

            return "hello $name, my name is $this->name";
        }
        
        public function sayGoodbye(?string $name):void
        {
            echo "Good bye $name" . PHP_EOL;
        }

    }