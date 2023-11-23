<?php

declare(strict_types=1);

namespace App\Animal\Category;

use App\Animal\Animal;
use App\Animal\Meals\PlantMeal;

abstract class Herbivore extends Animal
{
    public function feed(PlantMeal $plantMeal): string
    {
        return sprintf('Im herbivore and i want %s', $plantMeal->getName());
    }
}
