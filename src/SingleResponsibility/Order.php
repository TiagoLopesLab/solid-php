<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\SingleResponsibility;

readonly class Order
{
    public function __construct(
        public string $uuid,
        public float $amount
    ) {
    }
}
