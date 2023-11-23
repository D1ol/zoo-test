<?php

declare(strict_types=1);

namespace App\Animal\Meals;

class MeatMeal extends Meal
{
    public function getName(): string
    {
        return sprintf('meat %s', parent::getName());
    }
}