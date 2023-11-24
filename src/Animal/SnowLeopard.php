<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Carnivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Enum\AnimalTypeEnum;

readonly final class SnowLeopard extends Carnivore implements CombableInterface
{
    public function __construct(string $name)
    {
        parent::__construct($name, AnimalTypeEnum::SNOW_LEOPARD);
    }

    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}
