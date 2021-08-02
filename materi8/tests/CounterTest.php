<?php

    namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

    class CounterTest extends TestCase{

        
        private Counter $counter;

        protected function setUp():void
        {
            $this->counter = new Counter();
            echo "Membuat Counter" . PHP_EOL;
        }

        public function testCounter():void
        {
            $this->counter->increment();
            Assert::assertEquals(1, $this->counter->getCounter());
        }

        public function testIncrements()
        {
            self::assertEquals(0, $this->counter->getCounter());
            self::markTestIncomplete("TODO do Counter again");
        }

        /** 
         * @test
        */
        public function increment():void
        {
            self::markTestSkipped("skiped");
            $this->counter->increment();
            Assert::assertEquals(1, $this->counter->getCounter());
        }

        public function testFirst(): Counter
        {
            $this->counter->increment();
            Assert::assertEquals(1, $this->counter->getCounter());
            return $this->counter;
        }
        /**
         * @depends testFirst
         */
        public function testSecond(Counter $counter):void
        {
            $counter->increment();
            Assert::assertEquals(2, $counter->getCounter());
        }

        /**
         * @after
         */
        public function tearDown():void
        {
            echo "Tear Down" . PHP_EOL;
        }

        /**
         * @requires OSFAMILY Linux
         */
        public function testOnlyWindows()
        {
            self::assertTrue(true, "Only in windows");
        }
    }