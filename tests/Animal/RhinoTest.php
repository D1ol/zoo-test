<?php

namespace Animal;

use App\Animal\Category\Herbivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Meals\PlantMeal;
use App\Animal\Rhino;
use PHPUnit\Framework\TestCase;

class RhinoTest extends TestCase
{
    public function testIsHerbivore()
    {
        $animal = new Rhino('Nosorozowki');
        $this->assertInstanceOf(Herbivore::class, $animal);
    }

    public function testCanEatPlantMeal(): void
    {
        $animal = new Rhino('Nosorozowki');
        $herbivoresMeal = new PlantMeal();

        $expectedFeed = 'Im herbivore and i want plant meal';
        $this->assertSame($expectedFeed, $animal->feed($herbivoresMeal));
    }

    public function testCanComb()
    {
        $animal = new Rhino('Nosorozowki');
        $this->assertNotInstanceOf(CombableInterface::class, $animal);
    }
}
