<?php

declare(strict_types=1);

namespace App\AppCore\Database;

use App\AppCore\Routing\Url;
use App\AppCore\Utils\Debug;
use App\Routes\Routes;
use PDO;
use PDOException;

class Database
{
    private PDO|null $connection = null;

    public function __construct()
    {
        try {
            $host = getenv('MYSQL_HOST');
            $database = getenv('MYSQL_DATABASE');

            $this->connection = new PDO(
                "mysql:host=$host;dbname=$database;charset=utf8mb4",
                getenv('MYSQL_USER'),
                getenv('MYSQL_PASSWORD'),
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );

        } catch(PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function __destruct()
    {
        $this->connection = null;
    }

    public function getConnection(): PDO
    {
        if (!$this->connection) {
            Url::redirect(Routes::AppError);
        }

        return $this->connection;
    }
}
