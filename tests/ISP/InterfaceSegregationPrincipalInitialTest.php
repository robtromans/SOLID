<?php

class InterfaceSegregationPrincipalInitialTest extends PHPUnit_Framework_TestCase
{
    public function testCarDoor()
    {
        $this->assertTrue($this->getVehicle('Car')->shutDoor());
    }

    public function testBusDoor()
    {
        $this->assertTrue($this->getVehicle('Bus')->shutDoor());
    }

    public function testMotorBikeDoor()
    {
        $this->assertNotTrue($this->getVehicle('MotorBike')->shutDoor());
    }

    private function getVehicle($name)
    {
        $vehicle = 'SOLID\ISP\Initial\\'.$name;
        return new $vehicle;
    }
}