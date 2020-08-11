<?php


namespace OneSite\DesignPattern\Strategy\Example;


class PaymentFactory
{
    public static function getPaymentMethod(string $id): PaymentMethod
    {
        switch ($id) {
            case "cc":
                return new CreditCardPayment;
            case "paypal":
                return new PayPalPayment;
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}
