<?php

declare(strict_types=1);

namespace App\Models;

use App\AppCore\Model\Model;
use App\AppCore\Routing\Url;
use App\Routes\Routes;
use PDO;

class TodoModel extends Model
{
    public function getAllTodos()
    {
        try {
            // TODO: SELECT * FROM `todos` WHERE `user_id`=? ORDER BY `id` DESC
            $statement = $this->connection->prepare('SELECT * FROM `todos` ORDER BY `id` DESC');
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function getTodo(int $id): object|false
    {
        try {
            // TODO: SELECT * FROM `todos` WHERE `id`=? AND `user_id`=?
            $statement = $this->connection->prepare('SELECT * FROM `todos` WHERE `id`=?');
            $statement->execute([$id]);
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function delete(int $id): void
    {
        try {
            // TODO: DELETE FROM `todos` WHERE `id`=? AND `user_id`=?
            $statement = $this->connection->prepare('DELETE FROM `todos` WHERE `id`=?');
            $statement->execute([$id]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function setDone(int $id): void
    {
        try {
            // TODO: UPDATE `todos` SET `done`=1 WHERE `id`=? AND `user_id`=?
            $statement = $this->connection->prepare('UPDATE `todos` SET `done`=1 WHERE `id`=?');
            $statement->execute([$id]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function updateTodo(int $id, string $content): void
    {
        try {
            // TODO: UPDATE `todos` SET `content`=? WHERE `id`=? AND `user_id`=?
            $statement = $this->connection->prepare('UPDATE `todos` SET `content`=? WHERE `id`=?');
            $statement->execute([$content, $id]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }

    public function createTodo(string $content): void
    {
        try {
            $statement = $this->connection->prepare('INSERT INTO `todos`(`user_id`, `content`) VALUES (?, ?)');
            // TODO: použít ID přihlášeného uživatele
            $statement->execute([1, $content]);
        } catch(\PDOException $e) {
            Url::redirect(Routes::AppError);
        }
    }
}
