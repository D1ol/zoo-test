<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Herbivore;
use App\Animal\Enum\AnimalTypeEnum;

readonly final class Elephant extends Herbivore
{
    public function __construct(string $name)
    {
        parent::__construct($name, AnimalTypeEnum::ELEPHANT);
    }
}
