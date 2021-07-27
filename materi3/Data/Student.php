<?php

    
    class Student{

        public string $id;
        public string $name;
        public int $value;


        public function __clone()
        {
            unset($this->value);
        }
    
        public function __toString():string
        {
            return "Student id: $this->id, Name : $this->name, Value : $this->value" . PHP_EOL;
        }

        public function __invoke(...$argument):void
        {
            $join = join(",",$argument);
            echo "Invoke student with argument $join" . PHP_EOL;
        }

        public function __debugInfo()
        {
            return [
                "id" => $this->id,
                "name" => $this->name,
                "value" => $this->value,
            ];
        }
    }

    