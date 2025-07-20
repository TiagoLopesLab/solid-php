<?php

namespace Alura\Solid\Model;

use DomainException;

class Course
{
    private array $videos;
    private array $feedbacks;

    public function __construct(public readonly string $name)
    {
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receiveFeedback(int $nota, ?string $depoimento): void
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new DomainException('Depoimento obrigatório');
        }

        $this->feedbacks[] = [$nota, $depoimento];
    }

    public function addVideo(Video $video): void
    {
        if ($video->durationMinutes() < 3) {
            throw new DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }
}
