<?php

namespace SOLID\ISP\Refactored;

class Car implements VehicleInterface
{
    public function shutDoor()
    {
        return true;
    }
}