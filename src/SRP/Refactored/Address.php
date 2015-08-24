<?php
namespace SOLID\SRP\Refactored;

class Address
{
    protected $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    public function createAddress(Array $addressDetails)
    {
        try {
            // ...Save address details.
            return true;
        } catch (\Exception $e) {
            $this->log->logError($e->getMessage());
        }
    }
} 