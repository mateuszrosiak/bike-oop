<?php

namespace App;

class Race
{
    private array $bikes;
    private AbstractBike $bike;
    private int $tour = 5;
    private Uphill $uphill;

    public function __construct(Uphill $uphill)
    {
        $this->uphill = $uphill;
    }

    public function run(): void
    {
        $this->displayPlayerInfo();
        $this->displayTourInfo();
        $this->displayWinners();
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
            echo sprintf(
                "<br> <strong>Tour number: %d starts!</strong> <br>",
                $number
            );
            $this->tour();
        }
    }

    private function tour(): void
    {
        $bikes = $this->getBikes();
        $this->uphill->randomUphill();

        foreach ($bikes as $bike) {
            $bike->ride();
            echo sprintf(
                "<br> Bike %s  traveled: %d m<br>",
                $bike->getName(),
                $bike->getDistance()
            );
        }
    }

    private function displayWinners(): void
    {
        echo "<br>" . "<h3>Winners of the race are: </h3>" . "<br>";

        $winners = [];

        $winners = $this->getBikes();

        usort($winners, function ($object1, $object2) {
            return $object1->getDistance() < $object2->getDistance();
        });

        foreach ($winners as $index=>$winner) {
            echo sprintf("Place %d: %s (type: %s) with distance %d <br>", $index+1, $winner->getName(), $winner->getType(), $winner->getDistance());
        }


    }

    public function addBike(Bike $bike): void
    {
        $this->bikes[] = $bike;
    }


}