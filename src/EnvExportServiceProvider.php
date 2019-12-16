<?php

namespace Djunehor\Env;

use Djunehor\Env\ExportCommand;
use Illuminate\Support\ServiceProvider;

class EnvExportServiceProvider extends ServiceProvider
{


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            ExportCommand::class,
        ]);
    }


}
