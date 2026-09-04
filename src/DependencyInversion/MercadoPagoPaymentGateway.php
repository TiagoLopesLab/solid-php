<?php

namespace Tiagolopes\Solid\DependencyInversion;

use Tiagolopes\Solid\DependencyInversion\Contracts\PaymentGatewayInterface;

class MercadoPagoPaymentGateway implements PaymentGatewayInterface
{
    public function pay(int $amount): void
    {
        // Implementação via mercado pago utilizando uma lib externa
    }
}
