<?php

declare(strict_types=1);

namespace App\Animal\Category;

use App\Animal\Animal;
use App\Animal\Meals\MealInterface;

abstract class Omnivorous extends Animal
{
    public function feed(MealInterface $meal): string
    {
        return sprintf('Om-nom-nom %s', $meal->getName());
    }
}