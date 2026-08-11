<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\OpenClosed;

use DomainException;

class Order
{
    public function __construct(
        private float $amount,
        private ?DiscountInterface $discount = null
    ) {
    }

    public function setDiscount(DiscountInterface $discount): void
    {
        $this->discount = $discount;
    }

    public function getAmount(): float
    {
        if ($this->discount !== null) {
            $this->amount = $this->discount->apply($this->amount);
        }

        return $this->amount;
    }
}
