<?php

declare(strict_types=1);

namespace App\Animal;

use App\Animal\Category\Omnivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Enum\AnimalTypeEnum;

readonly final class Fox extends Omnivore implements CombableInterface
{
    public function __construct(string $name)
    {
        parent::__construct($name, AnimalTypeEnum::FOX);
    }

    public function comb(): string
    {
        return 'Cleaning the fur. Thank you!';
    }
}
