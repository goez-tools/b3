<?php

namespace Tests;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Ns\Example;
use PHPUnit\Framework\TestCase;

// Import the mockery helpers: mock(), spy(), ...
Mockery::globalHelpers();

class ExampleTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    protected function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * @test
     */
    public function it_should_be_a_instance_of_example_class(): void
    {
        $target = new Example();
        $this->assertInstanceOf(Example::class, $target);
    }

    /**
     * @test
     */
    public function it_should_spy_a_closure(): void
    {
        $spy = spy(function () {
        });

        call_user_func($spy);

        $spy->shouldHaveBeenCalled()->once();
    }
}
