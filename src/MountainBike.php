<?php

namespace App;

class MountainBike extends AbstractBike implements Bike
{
    protected string $type = 'Mountain Bike';
    protected int $maxSpeed = 40;


}