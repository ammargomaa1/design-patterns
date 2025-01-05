<?php

namespace Patterns\Behavioral\TemplateMethod;

class ImageCVReportGeneration implements CVReportGeneration
{
    public function generateCVReport(string $cvFilePath): GeneratedReport{
        $file = $this->readfile('some/path/to/file');
        $extractedData = $this->extractData($file);
        $analyzedData = $this->analyzeData($extractedData);
        return $this->generateReportOf($analyzedData);
    }

    private function generateReportOf(AnalyzedData $analyzedData) :GeneratedReport{
        echo 'generating report from ' . $analyzedData . PHP_EOL;
        return new GeneratedReport(true);
    }
    public function readFile(string $filePath): string{
        $string = 'reading File from ' . $filePath . PHP_EOL;

        echo $string;

        return $string;
    }
    public function extractData(string $data): Data{
        echo 'extracting Data from Image file: ' . $data . PHP_EOL;
        return new Data;

    }
    public function analyzeData(Data $data): AnalyzedData{
        echo 'analyzing data of '. $data . PHP_EOL;

        return new AnalyzedData;
    }
}
