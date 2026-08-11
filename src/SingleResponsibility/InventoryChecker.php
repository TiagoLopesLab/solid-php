<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\SingleResponsibility;

class InventoryChecker
{
    public function check(Order $order): void
    {
        echo 'Checando o inventário' . PHP_EOL;
    }
}
