<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Support\Facades\MyProviders;

class Controller extends BaseController
{
    public function profile($provider, $id)
    {
        $provider = MyProviders::get($provider);
        $user = $provider->findUser($id);
        return $user;
    }
}
