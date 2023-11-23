<?php

namespace Animal;

use App\Animal\Category\Omnivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Fox;
use App\Animal\Meals\Meal;
use App\Animal\Meals\MeatMeal;
use App\Animal\Meals\PlantMeal;
use PHPUnit\Framework\TestCase;

class FoxTest extends TestCase
{
    public function testIsOmnivore()
    {
        $animal = new Fox('Lisowski');
        $this->assertInstanceOf(Omnivore::class, $animal);

    }

    public function testCanEatMeatMeal(): void
    {
        $animal = new Fox('Lisowski');
        $carnivoresMeal = new MeatMeal();
        $herbivoresMeal = new PlantMeal();
        $omnivoresMeal = new Meal();

        $expectedFeed = 'Im omnivore and i dont care about meals';
        $this->assertSame($expectedFeed, $animal->feed($carnivoresMeal));
        $this->assertSame($expectedFeed, $animal->feed($herbivoresMeal));
        $this->assertSame($expectedFeed, $animal->feed($omnivoresMeal));
    }

    public function testCanComb()
    {
        $animal = new Fox('Lisowski');
        $this->assertInstanceOf(CombableInterface::class, $animal);


        $expectedComb = 'Cleaning the fur. Thank you!';
        $this->assertSame($expectedComb, $animal->comb());
    }
}
