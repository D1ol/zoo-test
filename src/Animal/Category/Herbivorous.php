<?php

declare(strict_types=1);

namespace App\Animal\Category;

use App\Animal\Animal;
use App\Animal\Meals\PlantMeal;

abstract class Herbivorous extends Animal
{
    public function feed(PlantMeal $plantMeal): string
    {
        return sprintf('Om-nom-nom %s', $plantMeal->getName());
    }
}