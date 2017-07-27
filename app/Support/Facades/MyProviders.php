<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

class MyProviders extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'social_providers';
    }

}