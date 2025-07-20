<?php

declare(strict_types=1);

namespace Alura\Solid\Core;

interface Watchable
{
    public function getScore(): float;

    public function watch(): void;
}
