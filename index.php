<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Bike;
use App\Race;

$race = new Race();

$bike1 = new Bike('Merida 1');
$race->addBike($bike1);

$race->run();

print_r($race->getBikes());
