<?php

require_once 'vendor/autoload.php';
use App\Company;
use League\Csv\Reader;
use League\Csv\Statement;


$csv = Reader::createFromPath('register.csv', 'r');
$csv->setDelimiter(';');
$header = $csv->setHeaderOffset(0);

$header = $csv->getHeader(); //returns the CSV header record

$companies = [];

$stmt = Statement::create()
    ->limit(30);

$records = $stmt->process($csv);



//aplikācijas daļa
while (true) {
    echo "Choose what you want to do\n";
    echo "Choose 1 to see the list of all companies\n";
    echo "Choose 2 to search for company by registration number\n";
    echo "Choose 3 to search for company by name\n";
    echo "Choose 4 to Exit\n";

    $userSelection = (int)readline(">> ");


    if ($userSelection === 1) {
        foreach ($records as $record) {
            $companies[] = new Company($record["regcode"], $record["name"], $record["regtype"], $record["registered"], $record["terminated"]);
        }
    }

    if ($userSelection === 2) {
        $regCode = (int)readline("Enter registration code: ");
        foreach ($companies as $company) {
            if ($company->getRegCode() == $regCode) ;
            echo $company->getName();
        }
    }

    if ($userSelection === 3) {
        $companyName = (int)readline("Enter name: ");
        foreach ($companies as $company) {
            if ($company->getName() == $companyName) {
                var_dump($company->getName());
            }
        }
    }

    if ($userSelection === 4) {
        echo "Bye";
        break;
    }
}



