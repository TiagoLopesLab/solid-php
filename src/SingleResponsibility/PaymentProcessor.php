<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\SingleResponsibility;

class PaymentProcessor
{
    public function process(Order $order): void
    {
        echo 'Processando o pagamento' . PHP_EOL;
    }
}
