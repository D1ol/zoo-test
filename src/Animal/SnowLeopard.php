<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Carnivores;
use App\Animal\Combing\CombingInterface;

class SnowLeopard extends Carnivores implements CombingInterface
{
    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}