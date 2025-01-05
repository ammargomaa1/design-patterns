<?php

namespace Patterns\Behavioral\TemplateMethod;

interface CVReportGeneration
{
    public function generateCVReport(string $cvFilePath): GeneratedReport;
    public function readFile(string $filePath): string;
    public function extractData(string $data): Data;
    public function analyzeData(Data $data): AnalyzedData;
}