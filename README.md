## Installation

composer require shayan/shazar-validation:@dev

## Usage in Composer.json of your project

copy and past code in composer.json of your project under "config"

"repositories": [
{
"type": "vcs",
"url": "https://github.com/shayanahmad1999/shazar-validation"
}
],

## Usage

use Shayan\ShazarValidation\CustomValidator;

$request->validate([
    'name' => ['required', CustomValidator::alphaSpace()],
]);

## OR

use Shayan\ShazarValidation\Rules\AlphaSpace;

$request->validate([
    'name' => ['required', new AlphaSpace()],
]);

