<?php

namespace Tiagolopes\Solid\DependencyInversion\Contracts;

interface PaymentGatewayInterface
{
    public function pay(int $amount): void;
}
