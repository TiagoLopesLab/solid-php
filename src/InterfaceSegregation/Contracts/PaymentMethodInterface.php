<?php

namespace Tiagolopes\Solid\InterfaceSegregation\Contracts;

interface PaymentMethodInterface
{
    public function pay(): void;
}
