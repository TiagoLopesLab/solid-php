<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraPlus;
use Alura\Solid\Model\Course;
use Alura\Solid\Model\Video;
use DomainException;

class ScoreCalculator
{
    public function getScore(object $conteudo): float
    {
        if ($conteudo instanceof Course) {
            return 100;
        } else if ($conteudo instanceof AluraPlus) {
            return $conteudo->durationMinutes() * 2;
        } else {
            throw new DomainException('Apenas Cursos e videos Alura+ possuem pontuações');
        }
    }
}
