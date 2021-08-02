<?php

    namespace ProgrammerZamanNow\Test;

    use PHPUnit\Framework\Assert;
    use PHPUnit\Framework\TestCase;

    class CounterStaticTest extends TestCase{

        public static Counter $counter;

        public static function setUpBeforeClass():void
        {
            self::$counter = new Counter();
        }
        
        public function testfirst()
        {
            self::$counter->increment();
            self::assertEquals(1, self::$counter->getCounter());
        }
        public function testSecond()
        {
            self::$counter->increment();
            self::assertEquals(2, self::$counter->getCounter());
        }
    }