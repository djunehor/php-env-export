<?php

namespace Djunehor\Env\Test;

use Djunehor\Env\EnvExportServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Orchestra\Testbench\Concerns\CreatesApplication;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            EnvExportServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetup()
    {
    }
}
