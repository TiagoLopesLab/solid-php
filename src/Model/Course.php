<?php

namespace Alura\Solid\Model;

use Alura\Solid\Core\Punctuable;
use DomainException;

class Course implements Punctuable
{
    private array $videos;
    private array $feedbacks;

    public function __construct(public readonly string $name)
    {
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receiveFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
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

    public function getScore(): float
    {
        return $this->durationMinutes() * 2;
    }
}
