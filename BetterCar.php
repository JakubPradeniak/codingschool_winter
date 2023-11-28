<?php

declare(strict_types=1);

class BetterCar
{
    // Toto se nazývá propagace proměnných z konstruktoru
    // a je to zkrácený zápis řádků 10 - 27 v souboru Car.php
    public function __construct(
        private string $brand,
        private string $model,
        private int $year
    )
    {
    }
}