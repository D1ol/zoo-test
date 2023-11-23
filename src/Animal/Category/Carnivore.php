<?php

declare(strict_types=1);

namespace App\Animal\Category;

use App\Animal\Animal;
use App\Animal\Meals\MeatMeal;

readonly abstract class Carnivore extends Animal implements CarnivoreInterface
{
    public function feed(MeatMeal $meatMeal): string
    {
        return sprintf('Im carnivore and i want %s', $meatMeal->getName());
    }
}
