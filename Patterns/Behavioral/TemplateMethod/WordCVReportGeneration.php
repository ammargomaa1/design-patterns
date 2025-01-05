<?php

namespace Patterns\Behavioral\TemplateMethod;

class WordCVReportGeneration extends CVReportGeneration
{
    public function extractData(string $data): Data{
        echo 'extracting Data from word file: ' . $data . PHP_EOL;
        return new Data;

    }
}
