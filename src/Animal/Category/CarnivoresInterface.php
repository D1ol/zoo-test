<?php

namespace App\Animal\Category;

use App\Animal\Meals\MeatMeal;

interface CarnivoresInterface
{
    public function feed(MeatMeal $meatMeal): string;
}