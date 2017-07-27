<?php

namespace App\Providers;

use App\Services\FacebookClient;
use App\Services\SocialProviders;
use Facebook\Facebook;
use Illuminate\Support\ServiceProvider;


class FacebookProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('facebook', function () {
            return new Facebook([
                'app_id' => env('FACEBOOK_APP_ID'),
                'app_secret' => env('FACEBOOK_APP_SECRET'),
                'default_graph_version' => 'v2.10',
                'default_access_token' => env('FACEBOOK_ACCESS_TOKEN'),
            ]);
        });
    }
}