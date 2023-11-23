<?php

declare(strict_types=1);

namespace App\Animal;


use App\Animal\Category\Omnivorous;
use App\Animal\Combing\CombingInterface;

final class Fox extends Omnivorous implements CombingInterface
{
    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}