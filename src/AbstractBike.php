<?php

namespace App;

abstract class AbstractBike implements Bike
{
    protected string $name;
    protected string $type;
    protected float $distance = 0;
    protected int $maxSpeed;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function ride() : float
    {
        return $this->distance += rand(10, 20) * $this->getMaxSpeed();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float|int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}