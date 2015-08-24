<?php

class SingleResponsibilityRefactoredTest extends PHPUnit_Framework_TestCase
{
    private $address;
    private $log;

    public function __construct()
    {
        // ...Decouple the logging logic from the address logic.
        $this->log = new SOLID\SRP\Refactored\Log();
        $this->address = new SOLID\SRP\Refactored\Address($this->log);
    }

    public function testSaveAddress()
    {
        $this->assertTrue($this->address->createAddress(array()));
    }

    public function testLog()
    {
        $this->assertTrue($this->log->logError('success'));
    }
}