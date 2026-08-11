<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\OpenClosed;

use DomainException;

readonly class PercentageDiscount implements DiscountInterface
{
    private float $percentage;
    public function __construct(
        float $percentage
    ) {
        if ($percentage > 100 || $percentage <= 0) {
            throw new DomainException('Informe um percentual maior que 0 até 100%');
        }

        $this->percentage = $percentage;
    }

    public function apply(float $amount): float
    {
        return $amount - ($amount * $this->percentage / 100);
    }
}
