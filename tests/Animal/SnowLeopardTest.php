<?php

namespace Animal;

use App\Animal\Category\Carnivore;
use App\Animal\Combing\CombableInterface;
use App\Animal\Meals\MeatMeal;
use App\Animal\SnowLeopard;
use PHPUnit\Framework\TestCase;

class SnowLeopardTest extends TestCase
{
    public function testIsCarnivore()
    {
        $animal = new SnowLeopard('Irbisowki');
        $this->assertInstanceOf(Carnivore::class, $animal);
    }

    public function testCanEatMeatMeal(): void
    {
        $animal = new SnowLeopard('Irbisowki');
        $carnivoresMeal = new MeatMeal();

        $expectedFeed = 'Im carnivore and i want meat meal';
        $this->assertSame($expectedFeed, $animal->feed($carnivoresMeal));
    }

    public function testCanComb()
    {
        $animal = new SnowLeopard('Irbisowki');
        $this->assertInstanceOf(CombableInterface::class, $animal);

        $expectedComb = 'Cleaning the fur. Thank you!';
        $this->assertSame($expectedComb, $animal->comb());
    }
}
