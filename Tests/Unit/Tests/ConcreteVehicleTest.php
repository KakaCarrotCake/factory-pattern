<?php

namespace Tests;

use App\Classes\ConcreteVehicle;
use App\Contracts\Vehicle;
use PHPUnit\Framework\TestCase;

class ConcreteDouble extends ConcreteVehicle
{}

class ConcreteVehicleTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new ConcreteDouble();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut);
    }

    public function testSetWheelsTest () : void
    {
        $this->sut->setWheels(2);
        $this->assertEquals(2, $this->sut->getWheels());

        $this->sut->setWheels(4);
        $this->assertEquals(4, $this->sut->getWheels());
    }

    public function testSpeed () : void
    {
        $this->sut->setSpeed(100);
        $this->assertEquals(100, $this->sut->getSpeed());

        $this->sut->setSpeed(120);
        $this->assertEquals(120, $this->sut->getSpeed());
    }

    public function testColour () : void
    {
        $this->sut->setColour('red');
        $this->assertEquals('red', $this->sut->getColour());

        $this->sut->setColour('white');
        $this->assertEquals('white', $this->sut->getColour());
    }

    public function testName () : void
    {
        $this->sut->setName('bike');
        $this->assertEquals('bike', $this->sut->getName());

        $this->sut->setName('car');
        $this->assertEquals('car', $this->sut->getName());
    }
}
