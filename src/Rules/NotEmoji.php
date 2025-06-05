<?php

namespace CustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class NoEmoji implements Rule
{
    public function passes($attribute, $value)
    {
        return !preg_match('/[\x{1F600}-\x{1F64F}]/u', $value);
    }

    public function message()
    {
        return 'The :attribute must not contain emojis.';
    }
}
