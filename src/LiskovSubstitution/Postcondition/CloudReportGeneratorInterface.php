<?php

namespace Tiagolopes\Solid\LiskovSubstitution\Postcondition;

interface CloudReportGeneratorInterface
{
    public function generate(): string;
}
