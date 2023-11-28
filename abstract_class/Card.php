<?php

declare(strict_types=1);

include_once './PaymentMethod.php';

class Card extends PaymentMethod {
    private int $cardNumber = 0;

    public function cardNumber(int $number): void {
        $this->cardNumber = $number;
    }

    public function pay(float $amount): bool {
        if ($this->cardNumber) {
            echo "<br />Kontakt platební brány prostředníctví API";
            return true;
        }

        echo "<br />Zadejte číslo karty";
        return false;
    }
}
