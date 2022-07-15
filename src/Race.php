<?php

namespace App;

class Race
{
    private array $bikes;
    private Bike $bike;

    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function getBikes(): array
    {
        return $this->bikes;
    }

    public function run(): void
    {
    }

    public function addBike(Bike $bike)
    {
        $this->bikes[] = $bike;
    }
}