<?php

namespace CustomValidation;

use CustomValidation\Rules\AlphaSpace;
use CustomValidation\Rules\StrongPassword;
use CustomValidation\Rules\NotEmoji;
use CustomValidation\Rules\ValidJSON;
use CustomValidation\Rules\DisposableEmail;
use CustomValidation\Rules\SlugFormat;
use CustomValidation\Rules\MatchOldPassword;
use CustomValidation\Rules\FileNameSafe;

class CustomValidator
{
    public static function alphaSpace()
    {
        return new AlphaSpace();
    }

    public static function strongPassword()
    {
        return new StrongPassword();
    }

    public static function noEmoji()
    {
        return new NotEmoji();
    }

    public static function validJson()
    {
        return new ValidJSON();
    }

    public static function disposableEmail()
    {
        return new DisposableEmail();
    }

    public static function slugFormat()
    {
        return new SlugFormat();
    }

    public static function matchOldPassword()
    {
        return new MatchOldPassword();
    }

    public static function fileNameSafe()
    {
        return new FileNameSafe();
    }
}
