<?php

namespace App;

class BikeFactory
{
    public static function createBike(string $type, string $name): Bike
    {
        return new $type($name);
    }

}