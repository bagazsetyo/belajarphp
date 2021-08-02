<?php

    namespace ProgrammerZamanNow\Test;

    use PHPUnit\Framework\Assert;
    use PHPUnit\Framework\TestCase;

    class PersonTest extends TestCase{

        private Person $person;

        protected function setUp():void
        {
            // $this->person = new Person('eko');
        }
        
        /**
         * @before
         */
        public function createPerson(){
            $this->person = new Person('eko');
        }

        public function testSuccess(){
            self::assertEquals("hello budi, my name is eko", $this->person->sayHello("budi"));
        }

        public function testException()
        {
            $this->expectException(\Exception::class);
            $this->person->sayHello(null);
        }

        public function testOutput(){
            $this->expectOutputString("Good bye Budi" . PHP_EOL);
            $this->person->sayGoodbye("Budi");
        }

    }