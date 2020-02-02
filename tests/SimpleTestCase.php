<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class SimpleTestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
	{
		parent::setUp();
	}

}
