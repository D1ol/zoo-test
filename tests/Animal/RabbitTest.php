<?php

namespace Animal;

use App\Animal\Category\Herbivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Meals\PlantMeal;
use App\Animal\Rabbit;
use PHPUnit\Framework\TestCase;

class RabbitTest extends TestCase
{
    public function testIsHerbivore()
    {
        $animal = new Rabbit('Krolikowski');
        $this->assertInstanceOf(Herbivore::class, $animal);
    }

    public function testCanEatPlantMeal(): void
    {
        $animal = new Rabbit('Krolikowski');
        $herbivoresMeal = new PlantMeal();

        $expectedFeed = 'Im herbivore and i want plant meal';
        $this->assertSame($expectedFeed, $animal->feed($herbivoresMeal));
    }

    public function testCanComb()
    {
        $animal = new Rabbit('Krolikowski');
        $this->assertInstanceOf(CombableInterface::class, $animal);

        $expectedComb = 'Cleaning the fur. Thank you!';
        $this->assertSame($expectedComb, $animal->comb());
    }
}
