<?php

namespace Tiagolopes\Solid\DependencyInversion;

use Tiagolopes\Solid\DependencyInversion\Contracts\PaymentGatewayInterface;

readonly class OrderProcessorService
{
    public function __construct(
        private PaymentGatewayInterface $gateway
    ) {
    }

    public function process(Order $order): void
    {
        $this->gateway->pay($order->amount);
    }
}
