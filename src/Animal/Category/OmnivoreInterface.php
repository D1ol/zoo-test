<?php

namespace App\Animal\Category;

use App\Animal\Meals\MealInterface;

interface OmnivoreInterface
{
    public function feed(MealInterface $meal): string;
}
