<?php

namespace App;

class Company
{
    private string $regCode;
    private string $name;
    private string $type;
//    private string $registered;
//    private string $terminated;

    public function __construct(string $regCode, string $name, string $type)
    {
        $this->regCode = $regCode;
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRegCode(): string
    {
        return $this->regCode;
    }
}