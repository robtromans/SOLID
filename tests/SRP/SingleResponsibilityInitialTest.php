<?php

class SingleResponsibilityInitialTest extends PHPUnit_Framework_TestCase
{
    private $address;

    public function __construct()
    {
        $this->address = new SOLID\SRP\Initial\Address();
    }

    public function testSaveAddress()
    {
        $this->assertTrue($this->address->createAddress(array()));
    }
}