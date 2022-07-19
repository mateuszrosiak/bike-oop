<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\BikeFactory;
use App\Bmx;
use App\MountainBike;
use App\Race;

$race = new Race();

$race->addBike(BikeFactory::createBike(Bmx::class, 'GT 1'));
$race->addBike(BikeFactory::createBike(Bmx::class, 'Haro 1'));
$race->addBike(BikeFactory::createBike(MountainBike::class, 'Trek 1'));
$race->addBike(BikeFactory::createBike(MountainBike::class, 'Trek 2'));
$race->addBike(BikeFactory::createBike(MountainBike::class, 'Merida 1'));
$race->addBike(BikeFactory::createBike(Bmx::class, 'GT 2'));

$race->run();

