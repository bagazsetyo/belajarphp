<?php

    namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

    class CounterTest extends TestCase{

        public function testCounter():void
        {
            $counter = new Counter();
            $counter->increment();
            Assert::assertEquals(1, $counter->getCounter());
        }

        /** 
         * @test
        */
        public function increment():void
        {
            $counter = new Counter();
            $counter->increment();
            Assert::assertEquals(1, $counter->getCounter());
        }

        public function testFirst(): Counter
        {
            $counter = new Counter();
            $counter->increment();
            Assert::assertEquals(1, $counter->getCounter());
            return $counter;
        }
        /**
         * @depends testFirst
         */
        public function testSecond(Counter $counter):void
        {
            $counter->increment();
            Assert::assertEquals(2, $counter->getCounter());
        }
    }