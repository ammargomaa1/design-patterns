<?php

namespace Patterns\Behavioral\TemplateMethod;

class ImageCVReportGeneration extends CVReportGeneration
{
    public function extractData(string $data): Data{
        echo 'extracting Data from Image file: ' . $data . PHP_EOL;
        return new Data;

    }
}
