<?php

namespace Tiagolopes\Solid\LiskovSubstitution\Precondition;

use InvalidArgumentException;

class CheckingAccount extends BankAccount
{
    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('O valor do depósito deve ser maior que 0');
        }

        $this->balance += $amount;
    }
}
