<?php

declare(strict_types=1);

// Pozor! každá proměná musí začínat dolarem
$number = 1;

if ($number > 10) {
    echo "větší než 10";
} elseif ($number === 10) {
   echo "číslo je rovno 10";
} else {
    echo "číslo je menší než 10";
}

echo "<br />";

switch ($number) {
    case 1:
        echo "jednička";
        break;
    case 5:
        echo "pětka";
        break;
    case 10:
        echo "desítka";
        break;
    default:
        echo "číslo";
}


/*
 * Match konstrukt funguje stejně jako switch, ale při nalezení shody
 * vrátí hodnotu za šipkou -> tu může následně buď uložit do proměnné
 * nebb vráti z naší funkce pomocí klíčového slova return
 */
$word = match ($number) {
    1 => "jednička",
    5 => "pětka",
    10 => "desítka",
    default => "číslo",
};

echo "<br />", $word;

$array = array("Škoda", "Mercedes", "Alfa Romeo", "Fiat");
$array2 = ["Škoda", "Mercedes", "Alfa Romeo", "Fiat"];
echo "<br />", $array[2],
    "<br />", $array2[0],
    "<br />", count($array2);

$array[3] = "Volvo";

echo "<br />", $array[3];

$assoc_array = [
    "brand" => "Škoda",
    "model" => "Octavia III",
    "year" => 2017
];

echo "<br />", $assoc_array["brand"], " - ", $assoc_array["model"], ", vyrobeno: ", $assoc_array["year"];

// Vícerozměrné pole (2D) - například reprezentace dat z databáze
$cars = [
    [
        "brand" => "Škoda",
        "model" => "Octavia III",
        "year" => 2017
    ],
    [
        "brand" => "Mercedes",
        "model" => "SLK",
        "year" => 2006
    ],
    [
        "brand" => "Peugeot",
        "model" => "308",
        "year" => 2008
    ]
];

// Vypsání obsahu proměnné na obrazovku
var_dump($cars);

foreach ($cars as $index => $car) {
    echo "<br />", $index, ": ", $car["brand"], " - ", $car["model"], ", vyrobeno: ", $car["year"];
}

echo "<br />";
foreach ($assoc_array as $key => $value) {
    echo "<br />", "Na klíči: ", $key, " je: ", $value;
}
echo "<br />";

for ($i = 0; $i < count($cars); $i++) {
    echo "<br />", $cars[$i]["brand"], " - ", $cars[$i]["model"], ", vyrobeno: ", $cars[$i]["year"];
}
