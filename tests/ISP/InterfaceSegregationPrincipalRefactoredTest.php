<?php

class InterfaceSegregationPrincipalRefactoredTest extends PHPUnit_Framework_TestCase
{
    public function testCarDoor()
    {
        $this->assertTrue($this->getVehicle('Car')->shutDoor());
    }

    public function testBusDoor()
    {
        $this->assertTrue($this->getVehicle('Bus')->shutDoor());
    }

    private function getVehicle($name)
    {
        $vehicle = 'SOLID\ISP\Refactored\\'.$name;
        return new $vehicle;
    }
}