<?php

namespace Alifavaldo\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }

    public function testCounter()
    {
        $this->counter->increment();
        $this->counterr->increment();

        Assert::assertEquals(1, $this->counterr->getCounter());

        // echo $counter->getCounter() . PHP_EOL;
    }


    public function testFirst(): Counter
    {
        $this->counterr->increment();

        $this->assertEquals(1, $this->counterr->getCounter());
        return $this->counterr;
    }

    /**
     * @depends testFirst
     */

    public function testSecond(Counter $counter)
    {
        $this->counterr->increment();

        $this->assertEquals(1, $this->counterr->getCounter());
    }
}
