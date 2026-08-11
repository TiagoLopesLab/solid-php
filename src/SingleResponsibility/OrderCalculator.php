<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\SingleResponsibility;

class OrderCalculator
{
    public function calculate(Order $order): void
    {
        echo 'Calculando o total' . PHP_EOL;
    }
}
