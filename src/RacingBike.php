<?php

namespace App;

class RacingBike extends AbstractBike implements Bike
{
    protected string $type = 'Racing Bike';
    protected int $maxSpeed = 55;

    public function ride(): float
    {
        $this->distance += rand(10, 20) * $this->getMaxSpeed();

        $uphill = Uphill::getInstance();
        if ($uphill->isUphill()) {
            $this->distance -= 75;
            echo sprintf("75 m distance penalty for %s because of racing uphill.", $this->getName());
        }

        return $this->distance;
    }
}