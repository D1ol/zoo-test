<?php

namespace App\Animal\Category;

use App\Animal\Meals\PlantMeal;

interface HerbivorousInterface
{
    public function feed(PlantMeal $plantMeal): string;
}