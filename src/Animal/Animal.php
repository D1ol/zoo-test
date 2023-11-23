<?php

declare(strict_types=1);

namespace App\Animal;

readonly class Animal implements AnimalInterface
{
    //As another option, we can add kind of animal here also
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
