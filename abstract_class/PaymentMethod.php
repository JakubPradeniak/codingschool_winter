<?php

declare(strict_types=1);


abstract class PaymentMethod {
    public function cancel(): void {
        echo "<br />Zde by byla implenetována logika zrušení platby";
    }

    abstract public function pay(float $amount): bool;
}
