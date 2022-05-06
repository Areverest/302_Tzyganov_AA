<?php

namespace lexa\Tests;

use \PHPUnit\Framework\TestCase;
use lexa\Task06_1\PayPal;
use lexa\Task06_1\CreditCard;
use lexa\Task06_1\PayPalAdapter;
use lexa\Task06_1\CreditCardAdapter;

class PayTest extends TestCase
{
    public function testAdapters()
    {
        $paypal = new PayPal('customer@aol.com', 'password');
        $cc = new CreditCard(1234567890123456, "09/23");
        $paypalAdapter = new PayPalAdapter($paypal);
        $ccAdapter = new CreditCardAdapter($cc);
        $this -> assertSame("Authorization code:", $ccAdapter -> collectMoney(1340));
        $this -> assertSame("PayPal Success!", $paypalAdapter -> collectMoney(100));
    }
}
