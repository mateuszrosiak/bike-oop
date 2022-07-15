<?php

namespace App;

class Bike
{
    private string $name;
    private string $type;

    const BMX = 'BMX';
    const MOUNTAINBIKE = 'Mountain Bike';

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
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



}