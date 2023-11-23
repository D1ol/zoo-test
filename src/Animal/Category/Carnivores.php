<?php

declare(strict_types=1);

namespace App\Animal\Category;

use App\Animal\Animal;
use App\Animal\Meals\MeatMeal;

abstract class Carnivores extends Animal implements CarnivoresInterface
{
    public function feed(MeatMeal $meatMeal): string
    {
        return sprintf('Om-nom-nom %s', $meatMeal->getName());
    }
}