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

    public function getRegCode(): string
    {
        return $this->regCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCompanyEntry(): string
    {

        return "Registration number: $this->regCode || Name: $this->name" . PHP_EOL;

    }

}