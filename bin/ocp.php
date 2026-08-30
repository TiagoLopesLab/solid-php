<?php

declare(strict_types=1);

use Tiagolopes\Solid\OpenClosed\FixedDiscount;
use Tiagolopes\Solid\OpenClosed\Order;
use Tiagolopes\Solid\OpenClosed\PercentageDiscount;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$order = new Order(
    amount: 150,
    discount: new FixedDiscount(10)
);
echo $order->getAmount() . PHP_EOL;

$order2 = new Order(
    amount: 593.80,
    discount: new PercentageDiscount(25)
);
echo $order2->getAmount() . PHP_EOL;
