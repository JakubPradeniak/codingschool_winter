<?php

declare(strict_types=1);

class Car
{
    // Veřejná členská proměnná
    // K veřejným proměnným (i metodám) můžeme přistoupit
    // z venku třídy
    public string $brand;

    // Soukromá členská promenná
    // K soukromým proměnným (i metodám) je možné přistoupit
    // pouze uvnitř třídy
    private string $model;

    // Chráněná členská proměnná
    // K chráněným proměnných (i metodám) je možné přístoupit
    // pouze uvnitř třídy NEBO uvnitř tříd, které ji rozšiřují
    protected int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function __destruct()
    {
        echo "<br/>Zničení instance objektu.";
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }
}
