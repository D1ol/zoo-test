<?php

namespace Animal;

use App\Animal\Animal;
use App\Animal\Enum\AnimalTypeEnum;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public function testAnimalName(): void
    {
        $animalName = 'Tigerowski';
        $animalType = AnimalTypeEnum::TIGER;

        $animal = new Animal($animalName, $animalType);

        $this->assertSame($animalName, $animal->getName());
        $this->assertSame($animalType, $animal->getType());
    }
}
