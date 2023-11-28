<?php

declare(strict_types=1);

include './Car.php';
include './BetterCar.php';
include './DrivableCar.php';

$car = new Car("Škoda", "Octavia III", 2017);

$betterCar = new BetterCar("Škoda", "Octavia III", 2017);

$drivableCar = new DrivableCar("Mercedes", "SLK", 2006);

echo "<br />", $car->brand, " ", $car->getModel(), " ", $car->getYear();

$car->setYear(2018);

echo "<br />", $car->getYear(), "<br />";

echo "<br />", $drivableCar->brand, " ", $drivableCar->getModel(), " ", $drivableCar->getYear();
$drivableCar->refillGas(20);
$drivableCar->drive(10);
echo "<br />Zbyvající palivo: ", $drivableCar->getFuel();

echo "<br />";
var_dump($car instanceof Car);