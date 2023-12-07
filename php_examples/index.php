<?php

declare(strict_types=1);

echo PHP_VERSION;

// isset - funkce pro testování zda je proměnná definována
if (isset($_GET['name'])) {
    var_dump($_GET['name']);
}
