<?php

namespace App;

class BikeFactory
{
    public static function createBike(string $type, string $name) {
        return new $type($name);
    }

}