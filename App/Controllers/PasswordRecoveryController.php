<?php

declare(strict_types=1);

namespace App\Controllers;

use App\AppCore\Controller\Controller;
use App\AppCore\Routing\Url;
use App\AppCore\Utils\Persist;
use App\AppCore\Utils\Sanitize;
use App\AppCore\View\View;
use App\Models\PasswordRecoveryModel;
use App\Models\UserModel;
use App\Routes\Routes;
use App\Validations\PasswordRecoveryValidation;

class PasswordRecoveryController extends Controller
{
    private UserModel $userModel;
    private PasswordRecoveryModel $passModel;

    public function __construct()
    {
        parent::__construct();

        $this->userModel = new UserModel($this->connection);
        $this->passModel = new PasswordRecoveryModel($this->connection);
    }

    public function store(): void
    {
        $sanitizedData = Sanitize::process($_POST);
        $validationResult = PasswordRecoveryValidation::validate($sanitizedData);

        if ($validationResult === true) {
            $user = $this->userModel->getUserByEmail($sanitizedData['email']);

            $emailSent = $this->passModel->createEntry($user->email, $user->id);

            if ($emailSent) {
                Persist::set('successMessage', 'emailSent');
                Url::redirect(Routes::Login);
            }
        } else {
            Persist::set('errorMessage', $validationResult);
        }

        Persist::set('formData', $sanitizedData);
        Url::redirect(Routes::Login);
    }

    public function edit(array $urlParams): void
    {
        View::make('PasswordRecovery', [
            'title' => 'Obnova hesla',
            'token' => $urlParams['token']
        ]);
    }
}
