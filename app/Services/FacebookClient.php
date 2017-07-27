<?php

namespace App\Services;


class FacebookClient implements SocialClient
{
    public function __construct()
    {

    }

    public function findUser($id)
    {
        return [
            "id" => 123456,
            "firstName" => "Juan",
            "lastName" => "Perez",
        ];
    }
}