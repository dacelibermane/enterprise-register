<?php declare(strict_types=1);

namespace App;
use League\Csv\Reader;



class CsvReader{

    private string $filePath;
    private string $delimiter;


    public function __construct(string $filePath, string $delimiter)
    {
        $this->filePath = $filePath;
        $this->delimiter = $delimiter;
    }

    public function getRecords(): CompanyCollection
    {
        $csv = Reader::createFromPath($this->filePath);
        $csv->setDelimiter($this->delimiter);
        $csv->setHeaderOffset(0);

        $records = new CompanyCollection();

        foreach ($csv->getRecords() as $record){
            $records->addCompany(new Company($record["regcode"], $record["name"]));
        }
        return $records;
    }

}

