<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Precondition;

use InvalidArgumentException;

abstract class BankAccount
{
    public function __construct(
        protected(set) float $balance = 0
    ) {
    }
}
