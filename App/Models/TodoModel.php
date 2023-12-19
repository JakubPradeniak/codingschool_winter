<?php

declare(strict_types=1);

namespace App\Models;

use App\AppCore\Model\Model;
use App\AppCore\Routing\Url;
use App\AppCore\Utils\Persist;
use App\Routes\Routes;
use PDO;

class TodoModel extends Model
{
    private int $userId;

    public function __construct(PDO $connection)
    {
        parent::__construct($connection);

        $this->userId = Persist::get('loggedUser') ? Persist::get('loggedUser')->id : 0;
    }

    public function getAllTodos()
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM `todos` WHERE `user_id`=? ORDER BY `id` DESC');
            $statement->execute([$this->userId]);
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function getTodo(int $id): object|false
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM `todos` WHERE `id`=? AND `user_id`=?');
            $statement->execute([$id, $this->userId]);
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function delete(int $id): void
    {
        try {
            $statement = $this->connection->prepare('DELETE FROM `todos` WHERE `id`=? AND `user_id`=?');
            $statement->execute([$id, $this->userId]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function setDone(int $id): void
    {
        try {
            $statement = $this->connection->prepare('UPDATE `todos` SET `done`=1 WHERE `id`=? AND `user_id`=?');
            $statement->execute([$id, $this->userId]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function updateTodo(int $id, string $content): void
    {
        try {
            $statement = $this->connection->prepare('UPDATE `todos` SET `content`=? WHERE `id`=? AND `user_id`=?');
            $statement->execute([$content, $id, $this->userId]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function createTodo(string $content): void
    {
        try {
            $statement = $this->connection->prepare('INSERT INTO `todos`(`user_id`, `content`) VALUES (?, ?)');
            $statement->execute([$this->userId, $content]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }
}
