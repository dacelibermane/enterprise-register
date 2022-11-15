<?php

namespace App;

class Company
{
    private string $regCode;
    private string $name;
    private string $type;
    private string $dateOfRegistration;


    public function __construct(string $regCode, string $name, string $type, string $dateOfRegistration)
    {
        $this->regCode = $regCode;
        $this->name = $name;
        $this->type = $type;
        $this->dateOfRegistration = $dateOfRegistration;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRegCode(): string
    {
        return $this->regCode;
    }



    public function getCompanyEntry(): string
    {

        return "$this->regCode, $this->name, $this->type, $this->dateOfRegistration" . PHP_EOL;

    }


}