<?php

namespace Hwkdo\IntranetAppTemplate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hwkdo\IntranetAppTemplate\Commands\IntranetAppTemplateCommand;

class IntranetAppTemplateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('intranet-app-template')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_intranet_app_template_table')
            ->hasCommand(IntranetAppTemplateCommand::class);
    }
}
