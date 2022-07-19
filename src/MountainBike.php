<?php

namespace App;

class MountainBike extends AbstractBike
{
    protected string $type = 'Mountain Bike';
    protected int $maxSpeed = 55;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}