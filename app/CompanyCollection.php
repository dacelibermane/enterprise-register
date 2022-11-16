<?php declare(strict_types=1);

namespace App;


class CompanyCollection
{

    private array $companies = [];

    public function addCompany(Company $company): void
    {
        $this->companies [] = $company;
    }


    public function getLastEntries(int $amount = 30): array
    {
        return array_slice($this->companies, -$amount);
    }


    public function getByName(string $name): ?Company
    {
        foreach ($this->companies as $company) {
            if ($company->getName() === $name) {
                return $company;
            }
        }
        return null;
    }

    public function getByRegNum(string $regNum): ?Company
    {
        foreach ($this->companies as $company) {
            if ($company->getRegCode() === $regNum) {
                return $company;
            }
        }
        return null;
    }

}