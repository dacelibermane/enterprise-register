<?php

require_once 'vendor/autoload.php';

use App\CsvReader;

$companies = new CsvReader('register.csv', ';');
$companies = $companies->getRecords();

while (true) {
    echo "Choose what you want to do:\n";
    echo "Choose 1 to see the entries of the register\n";
    echo "Choose 2 to search for company by registration number\n";
    echo "Choose 3 to search for company by name\n";
    echo "Choose 4 to Exit\n";

    $userSelection = (int)readline(">> ");

    if ($userSelection === 1) {
        $numberOfEntries = (int)readline("Enter number how many entries you would like to see: ");
        foreach ($companies->getLastEntries($numberOfEntries) as $company) {
            echo $company->getCompanyEntry();
        }
    }

    if ($userSelection === 2) {
        $regCode = readline("Enter registration number: ");
        $company = $companies->getByRegNum($regCode);
        if ($company) {
            echo $company->getCompanyEntry() . PHP_EOL;
        } else {
            echo "Company was not found in the list\n";
        }
    }

    if ($userSelection === 3) {
        $companyName = readline("Enter name: ");
        $company = $companies->getByName($companyName);
        if ($company) {
            echo $company->getCompanyEntry() . PHP_EOL;

        } else {
            echo "Company was not found in the list\n";
        }
    }

    if ($userSelection === 4) {
        echo "Bye";
        break;
    }

}



