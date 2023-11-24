<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Enum\AnimalTypeEnum;

readonly class Animal implements AnimalInterface
{
    public function __construct(
        private string $name,
        private AnimalTypeEnum $type,
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): AnimalTypeEnum
    {
        return $this->type;
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->type->value, $this->name);
    }
}
