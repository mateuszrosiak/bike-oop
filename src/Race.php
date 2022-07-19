<?php

namespace App;

class Race
{
    private array $bikes;
    private Bike $bike;
    private int $tour = 5;
    private float $distance = 0;

    public function __construct()
    {
    }

    public function run(): void
    {
        $this->displayPlayerInfo();
        $this->displayTourInfo();
    }

    private function displayPlayerInfo(): void
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

    private function displayTourInfo(): void
    {
        echo "<h2>Race info: </h2>";

        foreach (range(1, $this->tour) as $number) {
            echo sprintf("<br> <strong>Tour number: %d starts!</strong> <br>", $number);
            $this->tour();
        }
    }

    private function tour(): void
    {
        $bikes = $this->getBikes();

        foreach ($bikes as $bike) {
            $bike->ride();
            echo sprintf(
                "<br> Bike %s  traveled: %d m<br>",
                $bike -> getName(),
                $bike->getDistance()
            );
        }
    }

    public function addBike(Bike $bike): void
    {
        $this->bikes[] = $bike;
    }
}