<?php

use Ns\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	public function testTrue()
	{
		$target = new Example();
		$this->assertInstanceOf(Example::class, $target);
	}
}