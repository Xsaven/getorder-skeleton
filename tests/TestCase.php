<?php

declare(strict_types=1);

namespace Tests;

use GetOrder\Core\CoreServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Exception;

/**
 * TestCase class
 *
 * This class serves as the base test case for the application, providing setup functionality
 *
 * @package Tests
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * This method is called before each test.
     *
     * @return void
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        if (! CoreServiceProvider::authDeveloper()) {
            throw new Exception('Auth developer is not set, please set the DEVELOPER_ID environment variable.');
        }
    }
}
