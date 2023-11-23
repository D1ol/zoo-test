<?php

declare(strict_types=1);

namespace App\Animal\Category;

use App\Animal\Animal;
use App\Animal\Meals\MealInterface;

abstract class Omnivore extends Animal
{
    public function feed(MealInterface $meal): string
    {
        return sprintf('Im omnivore and i dont care about meals');
    }
}
