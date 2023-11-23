<?php

namespace App\Animal\Category;

use App\Animal\Meals\MealInterface;

interface OmnivorousInterface
{
    public function feed(MealInterface $meal): string;
}