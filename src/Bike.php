<?php

namespace App;

class Bike
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}