<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\BikeFactory;
use App\MountainBike;
use App\RacingBike;
use App\Race;
use App\Uphill;

$uphill = Uphill::getInstance();
$race = new Race($uphill);

$race->addBike(BikeFactory::createBike(RacingBike::class, 'GT 1'));
$race->addBike(BikeFactory::createBike(RacingBike::class, 'Haro 1'));
$race->addBike(BikeFactory::createBike(MountainBike::class, 'Trek 1'));
$race->addBike(BikeFactory::createBike(MountainBike::class, 'Trek 2'));
$race->addBike(BikeFactory::createBike(MountainBike::class, 'Merida 1'));
$race->addBike(BikeFactory::createBike(RacingBike::class, 'GT 2'));

$race->run();

