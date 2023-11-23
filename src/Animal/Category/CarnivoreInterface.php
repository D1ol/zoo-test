<?php

namespace App\Animal\Category;

use App\Animal\Meals\MeatMeal;

interface CarnivoreInterface
{
    public function feed(MeatMeal $meatMeal): string;
}
