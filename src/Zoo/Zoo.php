<?php

declare(strict_types=1);

namespace App\Zoo;

use App\Animal\AnimalInterface;

class Zoo
{
    /**
     * @var AnimalInterface[]
     */
    private array $animals;

    /**
     * @return AnimalInterface[]
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }

    public function addAnimal(AnimalInterface $animal): Zoo
    {
        $this->animals[] = $animal;

        return $this;
    }
}
