<?php

namespace Shayan\ShazarValidation;

use Shayan\ShazarValidation\Rules\AlphaSpace;
use Shayan\ShazarValidation\Rules\StrongPassword;
use Shayan\ShazarValidation\Rules\NotEmoji;
use Shayan\ShazarValidation\Rules\ValidJSON;
use Shayan\ShazarValidation\Rules\DisposableEmail;
use Shayan\ShazarValidation\Rules\SlugFormat;
use Shayan\ShazarValidation\Rules\MatchOldPassword;
use Shayan\ShazarValidation\Rules\FileNameSafe;

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
