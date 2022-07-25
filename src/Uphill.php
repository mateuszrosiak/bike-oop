<?php

namespace App;

final class Uphill
{
    const UPHILL = 'yes';
    const NO_UPHILL = 'no';
    private static $instance = null;

    private $uphill = self::NO_UPHILL;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Uphill();
        }

        return self::$instance;
    }

    public function randomUphill(): void
    {
        $this->uphill = 0 === random_int(0, 2) ? self::UPHILL : self::NO_UPHILL;
    }

    public function isUphill(): bool
    {
        return $this->uphill === self::UPHILL;
    }

    /**
     * @return mixed
     */
    public function getUphill()
    {
        return $this->uphill;
    }


}