<?php

namespace ShazarValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class SlugFormat implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid slug (lowercase, hyphens only).';
    }
}
