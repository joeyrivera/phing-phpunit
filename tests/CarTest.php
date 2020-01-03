<?php

use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testName()
    {
        $car = new Car('lambo');
        $this->assertEquals('lambo', $car->getName());
    }

    public function testNameNull()
    {
        $car = new Car();
        $this->assertNull($car->getName());
    }
}