<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Invariance;

use DomainException;
use InvalidArgumentException;

class BankAccount
{
    public function __construct(
        protected(set) float $balance = 0
    ) {
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('O valor do saque deve ser maior que 0');
        }

        if ($amount > $this->balance) {
            throw new DomainException('O valor do saque é maior que o saldo disponível');
        }

        $this->balance -= $amount;
    }
}
