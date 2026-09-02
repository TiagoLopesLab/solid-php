<?php

namespace Tiagolopes\Solid\InterfaceSegregation;

use Tiagolopes\Solid\InterfaceSegregation\Contracts\PaymentMethodInterface;

class CreditCard implements PaymentMethodInterface
{
    public function pay(): void
    {
        echo 'Pagamento via cartão de crédito' . PHP_EOL;
    }
}
