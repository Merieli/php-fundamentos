<?php

namespace Alura\Calisthenics\Domain\Name;

class FullName
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
