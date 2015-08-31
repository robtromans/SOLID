<?php

namespace SOLID\ISP\Initial;

class Car implements VehicleInterface
{
    public function shutDoor()
    {
        return true;
    }
}