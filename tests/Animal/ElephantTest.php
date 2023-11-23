<?php

namespace Animal;

use App\Animal\Category\Herbivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Elephant;
use App\Animal\Meals\PlantMeal;
use PHPUnit\Framework\TestCase;

class ElephantTest extends TestCase
{
    public function testIsHerbivore()
    {
        $animal = new Elephant('Slonowski');
        $this->assertInstanceOf(Herbivore::class, $animal);
    }

    public function testCanEatPlantMeal(): void
    {
        $animal = new Elephant('Slonowski');
        $herbivoresMeal = new PlantMeal();

        $expectedFeed = 'Im herbivore and i want plant meal';
        $this->assertSame($expectedFeed, $animal->feed($herbivoresMeal));
    }

    public function testCanComb()
    {
        $animal = new Elephant('Slonowski');
        $this->assertNotInstanceOf(CombableInterface::class, $animal);
    }
}
