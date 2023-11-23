<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Carnivore;
use App\Animal\Combing\CombableInterface;

readonly final class SnowLeopard extends Carnivore implements CombableInterface
{
    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}
