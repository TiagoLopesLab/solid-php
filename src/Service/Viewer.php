<?php

namespace Alura\Solid\Service;

use Alura\Solid\Core\Watchable;

class Viewer
{
    public function watch(Watchable $watchable): void
    {
        $watchable->watch();
    }
}
