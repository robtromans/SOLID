<?php

class LiskovSubstitutionTest extends PHPUnit_Framework_TestCase
{
    public function testPaypalPayment()
    {
        $this->assertTrue($this->getPaymentGateway('Paypal')->makePayment());
    }

    public function testSagePayPayment()
    {
        $this->assertTrue($this->getPaymentGateway('SagePay')->makePayment());
    }

    public function testTNSPayment()
    {
        $this->assertTrue($this->getPaymentGateway('TNS')->makePayment());
    }

    private function getPaymentGateway($name)
    {
        $gateway = 'SOLID\LSP\\'.$name;
        $paymentType = new $gateway;
        return new SOLID\LSP\PaymentManager($paymentType);
    }
}