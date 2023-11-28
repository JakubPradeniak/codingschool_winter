<?php

declare(strict_types=1);

include './Card.php';
include './Cash.php';

$card = new Card();
$cash = new Cash();

$card->cardNumber(123456789);
$card->pay(500);
$card->cancel();

$cash->pay(500);
$cash->cancel();