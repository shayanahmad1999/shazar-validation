<?php

namespace CustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class DisposableEmail implements Rule
{
    protected array $blockedDomains = [
        'mailinator.com',
        '10minutemail.com',
        'tempmail.com',
        'yopmail.com'
    ];

    public function passes($attribute, $value)
    {
        return !in_array(explode('@', $value)[1] ?? '', $this->blockedDomains);
    }

    public function message()
    {
        return 'The :attribute must not be from a disposable email provider.';
    }
}
