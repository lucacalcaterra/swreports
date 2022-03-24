<?php

namespace Lucacalcaterra\Swreports\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lucacalcaterra\Swreports\SwreportsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lucacalcaterra\\Swreports\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SwreportsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_swreports_table.php.stub';
        $migration->up();
        */
    }
}
