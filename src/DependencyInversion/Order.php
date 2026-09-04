<?php

namespace Tiagolopes\Solid\DependencyInversion;

class Order
{
    public function __construct(
        private(set) int $amount = 0
    ) {
    }

    public function increment(int $value): void
    {
        if ($value > 0) {
            $this->amount += $value;
        }
    }
}
