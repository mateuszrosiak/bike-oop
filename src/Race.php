<?php

namespace App;

class Race
{
    private array $bikes;
    private Bike $bike;
    private int $tour = 5;

    public function __construct()
    {
    }

    public function run(): void
    {
        $this->displayPlayerInfo();
        $this->displayTourInfo();
    }

    private function displayPlayerInfo()
    {
        $bikes = $this->getBikes();

        echo "<h2>Participants info: </h2>";

        foreach ($bikes as $bike) {
            echo sprintf(
                "Bike name: %s, type: %s <br>",
                $bike->getName(),
                $bike->getType()
            );
        }
    }



    /**
     * @return array
     */
    public function getBikes(): array
    {
        return $this->bikes;
    }

    public function addBike(Bike $bike)
    {
        $this->bikes[] = $bike;
    }

    private function displayTourInfo()
    {
        echo "<h2>Race info: </h2>";

        foreach(range(1, $this->tour) as $number) {
            echo sprintf("Tour number: %d starts! <br>", $number);
        }
    }
}