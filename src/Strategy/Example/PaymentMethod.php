<?php


namespace OneSite\DesignPattern\Strategy\Example;


/**
 * Interface PaymentMethod
 * @package OneSite\DesignPattern\Strategy\Example
 */
interface PaymentMethod
{
    /**
     * @param Order $order
     * @return string
     */
    public function getPaymentForm(Order $order): string;

    /**
     * @param Order $order
     * @param array $data
     * @return bool
     */
    public function validateReturn(Order $order, array $data): bool;
}
