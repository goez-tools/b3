<?php

namespace Tests;

use Ns\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testInstanceOf()
    {
        $target = new Example();
        $this->assertInstanceOf(Example::class, $target);
    }
}