<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Invariance;

readonly class TestAccount
{
    public function __construct(
        private BankAccount $bankAccount
    ) {
    }

    public function withdraw(float $amount): void
    {
        $this->bankAccount->withdraw($amount);

        echo "Saque de R$ $amount realizado" . PHP_EOL;
    }
}
