<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\OpenClosed;

use DomainException;

readonly class FixedDiscount implements DiscountInterface
{
    public function __construct(
        private float $value
    ) {
    }

    public function apply(float $amount): float
    {
        if ($this->value > $amount) {
            throw new DomainException('Desconto não pode ser maior que o valor do pedido');
        }

        return $amount - $this->value;
    }
}
