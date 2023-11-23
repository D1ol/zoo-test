<?php

namespace App\Animal\Category;

use App\Animal\Meals\PlantMeal;

interface HerbivoreInterface
{
    public function feed(PlantMeal $plantMeal): string;
}
