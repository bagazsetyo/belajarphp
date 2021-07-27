<?php
    interface Helloworld{
        function sayHello(): void;
    }

    // class SampleHelloWorld implements Helloworld{
    //     public function sayHello(): void
    //     {
    //         echo "say Hellow" . PHP_EOL;   
    //     }
    // }

    $hello = new class("bagas setyo") implements Helloworld{

        public string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function sayHello(): void
        {
            echo "say Hellow $this->name " . PHP_EOL;
        }
    };
    $hello->sayHello();