<?php

declare(strict_types=1);

include_once './Car.php';

// Dědičnost - nová třída má autimaticky přístup k veřejným a chráněným
// metodám a proměnným třídy, kterou rozšiřuje
class DrivableCar extends Car
{
    private float $fuel = 0;

    public function refillGas(float $fuel): void {
        if ($fuel > 50 && $this->fuel + $fuel > 50) {
            $this->fuel = 50;
        } else {
            // to samé jako: $this->fuel = $this->fuel + $fuel;
            $this->fuel += $fuel;
        }

        echo "<br />Nový stav paliva: $this->fuel";
    }

    public function getFuel(): float
    {
        return $this->fuel;
    }

    public function drive(float $distance): void
    {
        if ($this->fuel <= 0) {
            echo "<br />Prázná nádrž!";
        } else {
            $avgConsumption = 7;
            $this->fuel = $this->fuel - ($distance * $avgConsumption / 100);
            echo "<br />Ujeli jsme $distance km";
        }
    }
}