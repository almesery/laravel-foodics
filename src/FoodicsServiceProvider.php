<?php

namespace Foodics;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FoodicsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package->name('laravel-foodics')->hasConfigFile();

    }
}
