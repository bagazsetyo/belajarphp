<?php

    namespace ProgrammerZamanNow\Test;

    use PHPUnit\Framework\Assert;
    use PHPUnit\Framework\TestCase;

    class MathTest extends TestCase{

        public function testManual():void
        {
            self::assertEquals(10, Math::sum([5,5]));
            self::assertEquals(20, Math::sum([4,4,4,4,4]));
            self::assertEquals(9, Math::sum([3,3,3]));
            self::assertEquals(0, Math::sum([]));
            self::assertEquals(2, Math::sum([2]));
        }

        /**
         * @dataProvider mathSumData
         */
        public function testDataProvider(array $value, int $expected)
        {
            self::assertEquals($expected, Math::sum($value));
        }

        public function mathSumData(): array
        {
            return [
                [[5,5],10],
                [[4,4,4,4,4],20],
                [[3,3,3],9],
                [[],0],
                [[2],2],
            ];
        }
        /**
         * @testWith [[5,5],10]
         *           [[4,4,4,4,4],20]
         */
        public function testWith(array $value, int $expected)
        {
            self::assertEquals($expected, Math::sum($value));
        }
    }