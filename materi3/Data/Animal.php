<?php

    namespace Data;

    abstract class Animal{

        public string $name;

        abstract public function run();

    }

    
    class Cat extends Animal{

        public function run()
        {
            echo "cat $this->name is running" . PHP_EOL;
        }

    }
    