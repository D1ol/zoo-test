<?php

declare(strict_types=1);

namespace App\Animal\Meals;

class PlantMeal extends Meal
{
    public function getName(): string
    {
        return sprintf('plant %s', parent::getName());
    }
}