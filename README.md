## Installation
composer require shayan/shazar-validation:@dev

## Usage
use CustomValidation\CustomValidator;

$request->validate([
    'name' => ['required', CustomValidator::alphaSpace()],
]);
