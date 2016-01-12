<?php

use Ns\Example;

class ExampleTest extends PHPUnit_Framework_TestCase
{
	public function testTrue()
	{
		$target = new Example();
		$this->assertInstanceOf(Example::class, $target);
	}
}