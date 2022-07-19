<?php

namespace App;

class Bmx extends AbstractBike
{
    protected string $type = 'BMX';
    protected int $maxSpeed = 40;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}