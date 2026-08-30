<?php

declare(strict_types=1);

use Tiagolopes\Solid\LiskovSubstitution\Precondition\CheckingAccount;
use Tiagolopes\Solid\LiskovSubstitution\Precondition\SavingsAccount;
use Tiagolopes\Solid\LiskovSubstitution\Precondition\TestAccount;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$checkingAccount = new CheckingAccount();
$savingsAccount = new SavingsAccount();

$testAccount = new TestAccount($checkingAccount);

$depositAmount = 5;
$testAccount->deposit($depositAmount); // Funciona corretamente

$testAccount = new TestAccount($savingsAccount);
$testAccount->deposit($depositAmount); // Lança uma exceção
