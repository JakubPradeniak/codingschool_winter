<?php

declare(strict_types=1);

$username = "todo_php";
$password = "123456789";
$host = "localhost";
$database = "todos";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$users = $connection->query("SELECT * FROM `users`");

$users->num_rows;

while ($row = $users->fetch_assoc()) {
   echo $row['username'], " -> ", $row['email'], "<br />";
}


$userId = 3;

$stmt = $connection->prepare("SELECT * FROM `users` WHERE `id`=?");
$stmt->bind_param("i", $userId);

$userSuccess = $stmt->execute();

if ($userSuccess) {
    $user = $stmt->get_result();

    if ($user) {
        $data = $user->fetch_assoc();
        if ($data) {
            echo "<br /><strong>", $data['username'], " -> ", $data['email'], "</strong><br />";
        }
    }
}


$connection->close();
