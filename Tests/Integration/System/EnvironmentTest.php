<?php

namespace adamcameron\lid\Tests\Integration\System;

use \Generator;
use PHPUnit\Framework\TestCase;

/** @testdox Tests of environment variables */
class EnvironmentTest extends TestCase
{
    /**
     * @testdox The expected environment variables exist
     * @dataProvider provideCasesForEnvironmentVariablesTest
     */
    public function testEnvironmentVariables(string $expectedEnvironmentVariable)
    {
        $this->assertNotFalse(
            getenv($expectedEnvironmentVariable),
            "Expected environment variable $expectedEnvironmentVariable to exist"
        );
    }

    public static function provideCasesForEnvironmentVariablesTest(): Generator
    {
        $varNames = [
            "MARIADB_HOST",
            "MARIADB_PORT",
            "MARIADB_USER",
            "MARIADB_DATABASE",
            "MARIADB_ROOT_PASSWORD",
            "MARIADB_PASSWORD"
        ];
        foreach ($varNames as $varName) {
            yield $varName => [$varName];
        }
    }
}
