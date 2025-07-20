<?php

namespace Alura\Solid\Service;

use Alura\Solid\Core\Punctuable;

class ScoreCalculator
{
    public function getScore(Punctuable $content): float
    {
        return $content->getScore();
    }
}
