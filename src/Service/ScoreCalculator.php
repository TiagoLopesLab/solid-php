<?php

namespace Alura\Solid\Service;

use Alura\Solid\Core\Watchable;

class ScoreCalculator
{
    public function getScore(Watchable $content): float
    {
        return $content->getScore();
    }
}
