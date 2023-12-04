<?php

declare(strict_types=1);

$username = "todo_php";
$password = "123456789";
$host = "localhost";
$database = "todos";

$connection = new PDO(
    "mysql:host=$host;dbname=$database;charset=utf8mb4",
    $username,
    $password,
    array(
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    )
);

$users = $connection->query("SELECT * FROM `users`");

$users->rowCount();

while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'], " -> ", $row['email'], "<br />";
}

$userId = 3;

$stmt = $connection->prepare("SELECT * FROM `users` WHERE `id`=?");

$userSuccess = $stmt->execute([$userId]);

if ($userSuccess) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo "<br /><strong>", $user['username'], " -> ", $user['email'], "</strong><br />";
    }
}

$connection = null;
