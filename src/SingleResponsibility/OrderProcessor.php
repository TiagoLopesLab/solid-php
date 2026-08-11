<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\SingleResponsibility;

readonly class OrderProcessor
{
    public function __construct(
        private InventoryChecker $inventoryChecker,
        private OrderCalculator $orderCalculator,
        private PaymentProcessor $paymentProcessor
    ) {
    }

    public function processOrder(Order $order): void
    {
        $this->inventoryChecker->check($order);
        $this->orderCalculator->calculate($order);
        $this->paymentProcessor->process($order);
    }
}
