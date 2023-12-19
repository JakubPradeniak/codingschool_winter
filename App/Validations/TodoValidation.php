<?php

declare(strict_types=1);

namespace App\Validations;

class TodoValidation
{
    public static function validate(array $data): true|string
    {
        if(strlen($data['content']) === 0) {
            return 'emptyContent';
        }

        return true;
    }
}
