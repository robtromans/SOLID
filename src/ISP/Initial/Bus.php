<?php

namespace SOLID\ISP\Initial;

class Bus implements VehicleInterface
{
    public function shutDoor()
    {
        return true;
    }
}