<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraPlus;
use Alura\Solid\Model\Course;

class Viewer
{
    public function watchCourse(Course $course): void
    {
        foreach ($course->getVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAluraPlus(AluraPlus $aluraPlus): void
    {
        $aluraPlus->watch();
    }
}
