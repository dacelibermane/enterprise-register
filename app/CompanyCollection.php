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

    public function getAllData(): array
    {
        return $this->data;
    }

    public function get30LastEntries(): array
    {
        return array_slice($this->getAllData(), -30, 30);
    }


}