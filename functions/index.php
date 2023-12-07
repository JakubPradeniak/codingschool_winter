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

// První způsob předání zpětného volání a vyvolání akce
function funcWithCallback(callable $callback): void
{
    // výpočet
    // ...
    $callback();
}

// Druhý způsob předání zpětného volání a vyvolání akce
function funcWithCallbackTwo(Closure $callback): void
{
    // práce s DB
    call_user_func($callback);
}

/**
 * @return Closure - funkce, která očekává jeden argument typu string
 */
function higherOrderReturn(): Closure
{
    return Closure::fromCallable(
        function (string $message) {
            echo "<br /><b>$message</b><br />";
        }
    );
}

$helloWorld = function (): void
{
    echo "<br />Hello World!!";
};

echo addition(5, 9);

echo "<br />", subtraction(5);
echo "<br />", subtraction(5, 3);

echo "<br />", randomName(), "<br />";

writeName(randomName());

echo "<br /><br />";

funcWithCallback($helloWorld);
funcWithCallbackTwo(Closure::fromCallable($helloWorld));

$function = higherOrderReturn();

$function("Testování");

endProgram();

echo "Kód, ke kterému se nikdy nedostaneme.";
