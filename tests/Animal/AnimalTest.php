<?php

namespace Animal;

use App\Animal\Animal;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public function testAnimalName(): void
    {
        $animalName = 'Tigerowski';

        $animal = new Animal($animalName);

        $this->assertSame($animalName, $animal->getName());
    }
}
