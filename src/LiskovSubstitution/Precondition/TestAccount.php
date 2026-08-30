<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Precondition;

readonly class TestAccount
{
    public function __construct(
        private BankAccount $bankAccount
    ) {
    }

    public function deposit(float $amount): void
    {
        $this->bankAccount->deposit($amount);

        echo "O valor de R$ $amount foi depositado" . PHP_EOL;
    }
}
