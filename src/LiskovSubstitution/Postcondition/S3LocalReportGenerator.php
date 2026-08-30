<?php

declare(strict_types=1);

namespace Tiagolopes\Solid\LiskovSubstitution\Postcondition;

class S3LocalReportGenerator implements CloudReportGeneratorInterface
{
    private string $baseUrl;
    public function __construct()
    {
        $this->baseUrl = 'https://s3.amazonaws.com/mybucket';
    }

    public function generate(): string
    {
        // Lógica para geração do relatório

        $fileKey = uniqid(prefix: 's3_report', more_entropy: true) . '.txt';
        return "$this->baseUrl/$fileKey";
    }
}
