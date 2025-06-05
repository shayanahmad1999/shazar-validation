<?php

namespace ShazarValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidJSON implements Rule
{
    public function passes($attribute, $value)
    {
        json_decode($value);
        return json_last_error() === JSON_ERROR_NONE;
    }

    public function message()
    {
        return 'The :attribute must be a valid JSON string.';
    }
}
