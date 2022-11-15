<?php
namespace App;

class CompanyCollection
{
    private Company $header;
    private array $data = [];

    public function addHeader(Company $headerRow): void {
        $this->header = $headerRow;
    }

    public function addData(Company $row): void {
        $this->data [] = $row;
    }

    public function getTotalSum(): int {
        return count($this->data);
    }

    public function getHeader(): Company {
        return $this->header;
    }
}