<?php

use App\Animal\Animal;
use App\Animal\Elephant;
use App\Animal\Fox;
use App\Animal\Rabbit;
use App\Animal\Rhino;
use App\Animal\SnowLeopard;
use App\Animal\Tiger;
use App\Zoo\Zoo;

require_once __DIR__ . '/vendor/autoload.php';

$zoo = new Zoo();

$animals = getAnimals();

foreach ($animals as $animal) {
    $zoo->addAnimal($animal);
}

foreach ($zoo->getAnimals() as $animalInZoo) {
    echo $animalInZoo . PHP_EOL;
}

/**
 * @return Animal[]
 */
function getAnimals(): array
{
    return [
        new Tiger('Tigerowski'),
        new Elephant('Slonowski'),
        new Rhino('Nosorozowki'),
        new Fox('Lisowki'),
        new SnowLeopard('Irbisowki'),
        new Rabbit('Krolikowski')
    ];
}


