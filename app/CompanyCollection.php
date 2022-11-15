<?php declare(strict_types=1);

namespace App;

class CompanyCollection
{
    private Company $regCode;
    private array $data = [];

    public function addData(Company $row): void
    {
        $this->data [] = $row;
    }

    //šeit tieku pie masīva ar visiem ierakstiem
    public function getAllData(): array
    {
        return $this->data;
    }

    //pēdējie 30 ieraksti
    public function get30LastEntries(): array
    {
        return array_slice($this->getAllData(), -30, 30);
    }

//    public function getByRegistrationNumber():array
//    {
//        if (>getRegCode() === $regCode) {
//            echo $company->getName();
//        }
//    }



}