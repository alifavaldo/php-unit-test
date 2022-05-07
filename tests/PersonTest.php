<?php

namespace Alifavaldo\Test;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;
    protected function setUp(): void
    {
        $this->person = new Person("Edo");
    }
    public function testSuccess()
    {
        self::assertEquals("Hello Alif, my name is Edo", $this->person->sayHello("Alif"));
    }

    public function testExeption()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good Bye Edo" . PHP_EOL);

        $this->person->sayGoodBye("Edo");
    }
}
