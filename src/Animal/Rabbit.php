<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Herbivore;
use App\Animal\Combing\CombableInterface;

final class Rabbit extends Herbivore implements CombableInterface
{
    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}
