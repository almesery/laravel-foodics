<?php

namespace Foodics\Facades;

use Illuminate\Support\Facades\Facade;

class Foodics extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Foodics::class;
    }
}
