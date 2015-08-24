<?php
namespace SOLID\SRP\Initial;

class Address
{
    public function createAddress(Array $addressDetails)
    {
        try {
            // ...Save address details.
            return true;
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }

    protected function logError($message)
    {
        // ...Log error somewhere.
    }
} 