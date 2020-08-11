<?php


namespace OneSite\DesignPattern\Strategy\Example;

/**
 * This Concrete Strategy provides a payment form and validates returns for
 * PayPal payments.
 */
class PayPalPayment implements PaymentMethod
{
    /**
     * @param Order $order
     * @return string
     */
    public function getPaymentForm(Order $order): string
    {
        $returnURL = "https://our-website.com/" .
            "order/{$order->id}/payment/paypal/return";

        return <<<FORM
<form action="https://paypal.com/payment" method="POST">
    <input type="hidden" id="email" value="{$order->email}">
    <input type="hidden" id="total" value="{$order->total}">
    <input type="hidden" id="returnURL" value="$returnURL">
    <input type="submit" value="Pay on PayPal">
</form>
FORM;
    }

    /**
     * @param Order $order
     * @param array $data
     * @return bool
     */
    public function validateReturn(Order $order, array $data): bool
    {
        echo "PayPalPayment: ...validating... ";

        // ...

        echo "Done!\n";

        return true;
    }
}
