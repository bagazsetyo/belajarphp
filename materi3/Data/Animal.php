<?php

    namespace Data;

    require_once "Food.php";

    abstract class Animal{

        public string $name;

        abstract public function run();

        abstract public function eat(AnimalFood $animalFood);
    }

    
    class Cat extends Animal{

        public function run()
        {
            echo "cat $this->name is running" . PHP_EOL;
        }
        public function eat(AnimalFood $animalFood)
        {
            echo "Cat Eating" . PHP_EOL;
        }

    }
   
    class Dog extends Animal{

        public function run()
        {
            echo "dog $this->name is running" . PHP_EOL;
        }
        
        public function eat(Food $animalFood)
        {
            echo "Dog Eating" . PHP_EOL;
        }
    } 