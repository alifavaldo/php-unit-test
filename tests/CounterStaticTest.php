<?php

namespace Alifavaldo\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Constraint\Count;
use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase
{

    public static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
    }

    protected function setUp(): void
    {
        self::$counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }

    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("Todo Counter Again");
    }


    public function testFirst()
    {
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }
    public function testSecond()
    {
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }
    public static function tearDownAfterClass(): void
    {
        echo "Unit test selesai" . PHP_EOL;
    }
}
