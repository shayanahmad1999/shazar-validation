<?php

namespace Shayan\ShazarValidation\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class FileNameSafe implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[\w,\s-]+\.[A-Za-z]{3,4}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid file name.';
    }
}
