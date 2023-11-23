<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Omnivore;
use App\Animal\Combing\CombableInterface;

final class Fox extends Omnivore implements CombableInterface
{
    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}
