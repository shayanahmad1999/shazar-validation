<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use CustomValidation\Rules\AlphaSpace;

class AlphaSpaceTest extends TestCase
{
    public function test_alpha_space_rule()
    {
        $rule = new AlphaSpace();

        $this->assertTrue($rule->passes('name', 'John Doe'));
        $this->assertFalse($rule->passes('name', 'John123'));
    }
}
