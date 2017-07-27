<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Support\Facades\MyProviders;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Controller extends BaseController
{
    public function profile($provider, $id)
    {
        $provider = MyProviders::get($provider);
        try {
            $user = $provider->findUser($id);
        }catch (\Exception $e){
            throw new NotFoundHttpException('Not Found');
        }
        return $user;
    }
}
