<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\BikeFactory;
use App\Bmx;
use App\MountainBike;
use App\Race;

$race = new Race();

$race->addBike(new Bmx('GT 1'));
$race->addBike(new Bmx('Haro 1'));
$race->addBike(new MountainBike('Trek 1'));
$race->addBike(new MountainBike('Trek 2'));
$race->addBike(new MountainBike('Merida 1'));
$race->addBike(new Bmx('GT 2'));

$race->addBike(BikeFactory::createBike(Bmx::class, 'Test'));

$race->run();

