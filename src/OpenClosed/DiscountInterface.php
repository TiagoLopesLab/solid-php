<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\OpenClosed;

interface DiscountInterface
{
    public function apply(float $amount): float;
}
