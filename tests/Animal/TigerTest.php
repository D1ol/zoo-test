<?php

namespace Animal;

use App\Animal\Category\Carnivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Meals\MeatMeal;
use App\Animal\Tiger;
use PHPUnit\Framework\TestCase;

class TigerTest extends TestCase
{
    public function testIsCarnivore()
    {
        $animal = new Tiger('Tigerowski');
        $this->assertInstanceOf(Carnivore::class, $animal);

    }

    public function testCanEatMeatMeal(): void
    {
        $animal = new Tiger('Tigerowski');
        $carnivoresMeal = new MeatMeal();

        $expectedFeed = 'Im carnivore and i want meat meal';
        $this->assertSame($expectedFeed, $animal->feed($carnivoresMeal));
    }

    public function testCanComb()
    {
        $animal = new Tiger('Tigerowski');
        $this->assertNotInstanceOf(CombableInterface::class, $animal);
    }
}
