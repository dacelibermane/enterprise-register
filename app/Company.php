<?php declare(strict_types=1);

namespace App;

class Company
{
    private string $regCode;
    private string $name;


    public function __construct(string $regCode, string $name)
    {
        $this->regCode = $regCode;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRegCode(): string
    {
        return $this->regCode;
    }


    public function getCompanyEntry()
    {

        return "$this->regCode || $this->name" . PHP_EOL;

    }


}