<?php

namespace Alura\Solid\Model;

use DateInterval;

class Video
{
    protected bool $watched = false;
    protected DateInterval $duracao;

    public function __construct(public readonly string $name)
    {
        $this->watched = false;
        $this->duracao = DateInterval::createFromDateString('0');
    }

    public function watch(): void
    {
        $this->watched = true;
    }

    public function durationMinutes(): int
    {
        return $this->duracao->i;
    }

    public function getUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['name' => $this->name]);
    }
}
