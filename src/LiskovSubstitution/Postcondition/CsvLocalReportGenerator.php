<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Postcondition;

class CsvLocalReportGenerator implements LocalReportGeneratorInterface
{
    private string $basePath;
    public function __construct()
    {
        $this->basePath = dirname(path: __DIR__, levels: 3) . '/reports';
    }

    public function generate(): string
    {
        // Lógica para geração do relatório
        $header = 'title;description';
        $body = 'Título;Descrição de exemplo';

        $filename = $this->basePath . '/' . uniqid(prefix: 'report_', more_entropy: true) . '.csv';
        file_put_contents(filename: $filename, data: $header . PHP_EOL . $body);

        return $filename;
    }
}
