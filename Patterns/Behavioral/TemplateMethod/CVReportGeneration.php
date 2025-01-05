<?php

namespace Patterns\Behavioral\TemplateMethod;

abstract class CVReportGeneration
{
    public function generateReport(string $cvFilePath): GeneratedReport{
        $file = $this->readfile('some/path/to/file');
        $extractedData = $this->extractData($file);
        $analyzedData = $this->analyzeData($extractedData);
        return $this->generateReportOf($analyzedData);
    }

    private function generateReportOf(AnalyzedData $analyzedData) :GeneratedReport{
        var_dump ('generating report from ' , $analyzedData , PHP_EOL);
        return new GeneratedReport(false);
    }

    private function readFile(string $filePath): string{
        $string = 'reading File from ' . $filePath . PHP_EOL;

        echo $string;

        return $string;
    }
    private function analyzeData(Data $data): AnalyzedData{
        var_dump ('analyzing data of ', $data , PHP_EOL);

        return new AnalyzedData;
    }

    protected abstract function extractData(string $file): Data;
}