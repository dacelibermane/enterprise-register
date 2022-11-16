<?php declare(strict_types=1);

namespace App;


class CompanyCollection
{

    private array $companies = [];

    public function addCompany(Company $company): void
    {
        $this->companies [] = $company;
    }


    public function get30LastEntries(): array
    {
        return array_slice($this->companies, -30);
    }


    public function getByName(string $name): ?Company
    {
        foreach ($this->companies as $company) {
            if ($company->getName() === $name) {
                return $company->getRegCode();
            }
        }
        return null;
    }

    public function getByRegNum(string $regNum): ?Company
    {
        foreach ($this->companies as $company) {
            if ($company->getRegCode() === $regNum) {
                return $company->getName();
            }
        }
        return null;
    }

}