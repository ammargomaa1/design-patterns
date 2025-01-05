<?php

use Patterns\Behavioral\TemplateMethod\PDFCVReportGeneration;
use Patterns\Behavioral\TemplateMethod\WordCVReportGeneration;

require_once __DIR__ . '/../../../vendor/autoload.php';

$pdfReportGeneration = new PDFCVReportGeneration();
$generatedPDFReport = $pdfReportGeneration->generateReport('/file/path');

echo 'cv has ' . ($generatedPDFReport->isPassed() ?'passed':'not passed') . PHP_EOL;

$wordReportGeneration = new WordCVReportGeneration();
$generatedWordReport = $wordReportGeneration->generateReport('/file/path');

echo 'cv has ' . ($generatedWordReport->isPassed() ?'passed':'not passed') . PHP_EOL;