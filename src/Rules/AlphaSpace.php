<?php

namespace CustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaSpace implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[\pL\s]+$/u', $value);
    }

    public function message()
    {
        return 'The :attribute may only contain letters and spaces.';
    }
}
