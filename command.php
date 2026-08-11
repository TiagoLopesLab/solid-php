<?php

declare(strict_types=1);

use Tiagolopes\Solid\SingleResponsibility\InventoryChecker;
use Tiagolopes\Solid\SingleResponsibility\Order;
use Tiagolopes\Solid\SingleResponsibility\OrderCalculator;
use Tiagolopes\Solid\SingleResponsibility\OrderProcessor;
use Tiagolopes\Solid\SingleResponsibility\PaymentProcessor;

require_once 'vendor/autoload.php';

$order = new Order(
    uuid: '3424234234-sdasdas324234-32423dasfsd',
    amount: 150.99
);

$orderProcessor = new OrderProcessor(
    inventoryChecker: new InventoryChecker(),
    orderCalculator: new OrderCalculator(),
    paymentProcessor: new PaymentProcessor()
);
$orderProcessor->processOrder($order);
