<?php

declare(strict_types=1);

namespace App\Animal;

class Animal implements AnimalInterface
{

    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return sprintf('%s %s', (new \ReflectionClass($this))->getShortName(), $this->name);
    }
}