<?php

class Zero{

    private array $properties = [];

    public function __get($name){
        // echo "Access Property $name". PHP_EOL;
        // return "contoh";
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        // echo "set property $name with value $value" . PHP_EOL;
        
        return $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        // echo "Isset $name";
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        // echo "Unser $name";
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call $name with argument $join" . PHP_EOL;
    }
    
    public static function __callStatic($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call static $name with argument $join" . PHP_EOL;
    }
}

$zero = new Zero();
// echo $zero->firstname . PHP_EOL;
// echo $zero->firstname = "Eko" . PHP_EOL;
// unset($zero->firstname);
// isset($zero->firstname);

$zero->firstname = "Eko";
$zero->middlename = "Patrio";
$zero->lastname = "adit";


echo "firstname $zero->firstname" . PHP_EOL;
echo "middlename $zero->middlename" . PHP_EOL;
echo "lastname $zero->lastname" . PHP_EOL;

$zero->sayHello("call","Patrio");
Zero::sayHello("call","Patrio");