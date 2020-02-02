<?php

namespace Tests;

use Foundry\System\Models\User;
use Foundry\Core\Testing\TestCase as BaseTestCase;
use Illuminate\Contracts\Auth\Authenticatable;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

}
