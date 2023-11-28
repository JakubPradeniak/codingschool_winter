<?php

declare(strict_types=1);

include_once './PaymentMethod.php';

class Cash extends PaymentMethod {
    public function pay(float $amount): bool
    {
        echo "<br />Objednávku ve výši $amount zaplaťte při převzetí.";
        return true;
    }
}