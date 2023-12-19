<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\Controller\Controller;
use App\AppCore\Routing\Url;
use App\AppCore\Utils\Debug;
use App\AppCore\Utils\Persist;
use App\AppCore\Utils\Sanitize;
use App\AppCore\View\View;
use App\Models\TodoModel;
use App\Routes\Routes;
use App\Validations\TodoValidation;

class TodoController extends Controller
{
    private TodoModel $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new TodoModel($this->connection);
    }

    public function edit(array $urlParams): void
    {
        $todo = $this->model->getTodo(intval($urlParams['id']));

        View::make('EditTodo', [
            'title' => 'Úprava úkolu',
            'todo' => $todo,
            'successMessage' => Persist::get('successMessage'),
            'errorMessage' => Persist::get('errorMessage'),
        ]);

        Persist::delete(['successMessage', 'errorMessage']);
    }

    public function update(array $urlParams): void
    {
        if (isset($_POST['done'])) {
            $this->model->setDone(intval($urlParams['id']));
            Persist::set('successMessage', 'done');
            Url::redirect(Routes::EditTodo, $urlParams);
        } else {
            $validationResult = TodoValidation::validate($_POST);

            if($validationResult !== true) {
                Persist::set('errorMessage', $validationResult);
                Url::redirect(Routes::EditTodo, $urlParams);
            }

            $this->model->updateTodo(intval($urlParams['id']), Sanitize::process($_POST['content']));
            Persist::set('successMessage', 'update');
            Url::redirect(Routes::EditTodo, $urlParams);
        }
    }

    public function destroy(array $urlParams): void
    {
        $this->model->delete(intval($urlParams['id']));
        Persist::set('delete', 'success');
        Url::redirect(Routes::Todos);
    }
}
