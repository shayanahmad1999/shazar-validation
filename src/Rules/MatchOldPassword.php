<?php

namespace Shayan\ShazarValidation\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class MatchOldPassword implements Rule
{
    public function passes($attribute, $value)
    {
        return Hash::check($value, auth()->user()?->password);
    }

    public function message()
    {
        return 'The :attribute does not match your current password.';
    }
}
