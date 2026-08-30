<?php

declare(strict_types=1);

use Tiagolopes\Solid\LiskovSubstitution\Postcondition\CsvLocalReportGenerator;
use Tiagolopes\Solid\LiskovSubstitution\Postcondition\S3LocalReportGenerator;
use Tiagolopes\Solid\LiskovSubstitution\Postcondition\TestReportProcessor;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$CsvReportGenerator = new CsvLocalReportGenerator();
$S3ReportGenerator = new S3LocalReportGenerator();
$reportProcessor = new TestReportProcessor();

$reportProcessor->process($CsvReportGenerator); // Funciona corretamente
$reportProcessor->process($S3ReportGenerator); // Lança uma exceção, dessa vez por serem de tipos diferentes
