<?php

namespace App;

class Bike
{
    const BMX = 'BMX';
    const MOUNTAINBIKE = 'Mountain Bike';
    private string $name;
    private string $type;
    private float $distance = 0;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function ride()
    {
        return $this->distance += rand(10, 30) * 20;
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


}