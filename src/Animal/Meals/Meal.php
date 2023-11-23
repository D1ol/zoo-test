<?php

declare(strict_types=1);

namespace App\Animal\Meals;

class Meal implements MealInterface
{
    public function getName(): string
    {
        return 'meal';
    }
}