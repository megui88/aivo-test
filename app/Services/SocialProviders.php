<?php

namespace App\Services;


class SocialProviders
{
    private $facebookClient;

    public function __construct(SocialClient $facebookClient)
    {
        $this->facebookClient = $facebookClient;
    }

    public function get($provider)
    {
        switch (strtolower($provider)) {
            case 'facebook':
                return $this->facebookClient;
                break;
            default:
                throw new \Exception('The provider is wrong, please try again');
                break;
        }
    }
}