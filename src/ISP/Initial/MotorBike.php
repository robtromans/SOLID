<?php

namespace SOLID\ISP\Initial;

class MotorBike implements VehicleInterface
{
    public function shutDoor()
    {
        //...There is no door.
        return false;
    }
}