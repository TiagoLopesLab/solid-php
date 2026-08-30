<?php

declare(strict_types=1);

use Tiagolopes\Solid\LiskovSubstitution\Invariance\BankAccount;
use Tiagolopes\Solid\LiskovSubstitution\Invariance\CheckingAccount;
use Tiagolopes\Solid\LiskovSubstitution\Invariance\TestAccount;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$bankAccount = new BankAccount(balance: 150);
$checkingAccount = new CheckingAccount(balance: 150, overdraftLimit: 100);

$testAccount = new TestAccount($checkingAccount);
$testAccount->withdraw(200); // Realiza o saque por conta do limite adicional

$testAccount = new TestAccount($bankAccount);
$testAccount->withdraw(200); // Lança uma exceção
