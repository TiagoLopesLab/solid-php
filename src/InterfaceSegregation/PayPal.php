<?php

namespace Tiagolopes\Solid\InterfaceSegregation;

use Tiagolopes\Solid\InterfaceSegregation\Contracts\PaymentMethodInterface;

class PayPal implements PaymentMethodInterface
{
    public function pay(): void
    {
        echo 'Pagamento via PayPal' . PHP_EOL;
    }
}
