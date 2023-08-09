<?php

namespace test\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_example()
    {
        \Mockery::mock(\stdClass::class)->shouldReceive('test')->andReturn(true);
        $this->assertTrue(true);
    }
}