<?php

declare(strict_types=1);

function addition(int $a, int $b): int
{
    return $a + $b;
}

function subtraction(int $a, int $b = 1): int
{
    return $a - $b;
}

function randomName(): string
{
    $names = ["Petr", "Ondra", "Kuba", "Matěj"];

    return $names[rand(0, 3)];
}

function writeName(string $name): void
{
    echo $name;
}

function endProgram(): never
{
//    die("Ukončeno");
    exit();
}


echo addition(5, 9);

echo "<br />", subtraction(5);
echo "<br />", subtraction(5, 3);

echo "<br />", randomName(), "<br />";

writeName(randomName());

endProgram();

echo "Kód, ke kterému se nikdy nedostaneme.";
