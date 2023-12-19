<?php

declare(strict_types=1);

namespace App\Validations;

class PasswordRecoveryValidation
{
    public static function validate(array $data): true|string
    {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return 'error';
        }

        return true;
    }
}
