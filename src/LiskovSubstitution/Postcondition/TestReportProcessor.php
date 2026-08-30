<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Postcondition;

use DomainException;

class TestReportProcessor
{
    public function process(LocalReportGeneratorInterface $reportGenerator): void
    {
        $filepath = $reportGenerator->generate();

        if (!file_exists($filepath)) {
            throw new DomainException('O relatório não existe.');
        }

        echo 'Relatório processado' . PHP_EOL;
    }
}
