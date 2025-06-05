<?php

namespace CustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrongPassword implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be at least 8 characters and include upper/lowercase, a digit, and a special character.';
    }
}
