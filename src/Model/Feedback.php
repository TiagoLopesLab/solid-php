<?php

declare(strict_types=1);

namespace Alura\Solid\Model;

use DomainException;

readonly class Feedback
{
    public int $note;
    public ?string $testimony;
    public function __construct(int $note, ?string $testimony) {
        if ($note < 9 && empty($testimony)) {
            throw new DomainException('Depoimento obrigatório');
        }

        $this->note      = $note;
        $this->testimony = $testimony;
    }
}
