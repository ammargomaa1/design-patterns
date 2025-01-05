<?php

namespace Patterns\Behavioral\TemplateMethod;

class PDFCVReportGeneration extends CVReportGeneration
{
    public function extractData(string $data): Data{
        echo 'extracting Data of ' . $data . PHP_EOL;
        return new Data;

    }
}
