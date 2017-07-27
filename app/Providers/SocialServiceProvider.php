<?php

namespace App\Providers;

use App\Services\FacebookClient;
use App\Services\SocialProviders;
use Illuminate\Support\ServiceProvider;


class SocialServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('social_providers', function () {
            $facebookClient = new FacebookClient($this->app->facebook);
            return new SocialProviders($facebookClient);
        });
    }
}