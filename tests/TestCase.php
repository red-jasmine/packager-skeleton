<?php

namespace :uc:vendor\:uc:package\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Automatically enables package discoveries.
     *
     * @var bool
     */
    protected $enablesPackageDiscoveries = true;

    /**
     * Define database migrations.
     *
     * @return void
     */
    protected function defineDatabaseMigrations() : void
    {
        $this->loadLaravelMigrations();
    }
}
