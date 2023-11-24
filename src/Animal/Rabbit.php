<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Herbivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Enum\AnimalTypeEnum;

readonly final class Rabbit extends Herbivore implements CombableInterface
{
    public function __construct(string $name)
    {
        parent::__construct($name, AnimalTypeEnum::RABBIT);
    }

    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}
