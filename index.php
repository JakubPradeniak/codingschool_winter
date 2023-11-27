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