<?php

namespace SOLID\ISP\Refactored;

class Bus implements VehicleInterface
{
    public function shutDoor()
    {
        return true;
    }
}