<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Carnivore;
use App\Animal\Enum\AnimalTypeEnum;

readonly final class Tiger extends Carnivore
{
    public function __construct(string $name)
    {
        parent::__construct($name, AnimalTypeEnum::TIGER);
    }
}
