<?php

namespace Shayan\ShazarValidation;

use ShazarValidation\Rules\AlphaSpace;
use ShazarValidation\Rules\StrongPassword;
use ShazarValidation\Rules\NotEmoji;
use ShazarValidation\Rules\ValidJSON;
use ShazarValidation\Rules\DisposableEmail;
use ShazarValidation\Rules\SlugFormat;
use ShazarValidation\Rules\MatchOldPassword;
use ShazarValidation\Rules\FileNameSafe;

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
