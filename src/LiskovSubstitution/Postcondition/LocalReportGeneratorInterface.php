<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Postcondition;

interface LocalReportGeneratorInterface
{
    public function generate(): string;
}
