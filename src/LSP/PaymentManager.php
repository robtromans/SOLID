<?php
namespace SOLID\LSP;

class PaymentManager
{
    protected $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function makePayment()
    {
        return $this->payment->processPayment();
    }
} 