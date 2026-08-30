<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Invariance;

use DomainException;
use InvalidArgumentException;

class CheckingAccount extends BankAccount
{
    public function __construct(
        float $balance = 0,
        protected(set) float $overdraftLimit = 0
    ) {
        parent::__construct($balance);
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('O valor do saque deve ser maior que 0');
        }

        $availableBalance = $this->balance + $this->overdraftLimit;

        if ($amount > $availableBalance) {
            throw new DomainException('Saldo insuficiente e limite de cheque especial excedido.');
        }

        $this->balance -= $amount;
    }
}
