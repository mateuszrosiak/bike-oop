<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Bike;
use App\Race;

$race = new Race();

$race->addBike(new Bike('GT 1', Bike::BMX));
$race->addBike(new Bike('Haro 1', Bike::BMX));
$race->addBike(new Bike('Trek 1', Bike::MOUNTAINBIKE));
$race->addBike(new Bike('Trek 2', Bike::MOUNTAINBIKE));
$race->addBike(new Bike('Merida 1', Bike::MOUNTAINBIKE));
$race->addBike(new Bike('GT 1', Bike::BMX));

$race->run();

//print_r($race->getBikes());
