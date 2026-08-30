<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Precondition;

use InvalidArgumentException;

class SavingsAccount extends BankAccount
{
    public function deposit(float $amount): void
    {
        if ($amount < 10) {
            throw new InvalidArgumentException('O valor mínimo é de R$ 10,00 para a conta poupança');
        }

        $this->balance += $amount;
    }
}
