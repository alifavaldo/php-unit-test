<?php

namespace Alifavaldo\Test;

use Exception;

class Person
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(?string $name): string
    {
        if ($name == null) throw new \Exception("Name is Null");

        return "Hello $name, my name is $this->name";
    }

    public function sayGoodBye(?string $name)
    {
        echo "Good Bye $name" . PHP_EOL;
    }
}
